<?php
#DATA
$TITLE = "Faktura";

$_DATA['id'] = g_arg(0);
if (!data('id')) {
	$res = sql("SELECT COALESCE(MAX(bil_id),0) AS cislo FROM bills WHERE DATE_FORMAT(bil_date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')");
	if ($row = sql_obj($res)) $_DATA['id'] = $row->cislo ? $row->cislo + 1 : date('ym') . str_pad($row->cislo + 1, 5, '0', STR_PAD_LEFT);
}

$cols = array("date", "id", "due", "type", "paid", "customer", "payment_form");
$bii_cols = array("item", "price", "count", "tax", "bill");
$cus_cols = array("ico", "dic", "obec", "ulice", "psc", "cp", "telefon", "email");

if (data('id')) {
	$res = sql("SELECT ". fill_select("bil", $cols) ." FROM bills WHERE bil_id = '". data('id') ."'");
	if ($row = sql_obj($res)) fill_data($row, $cols, "bil");
	
	$res = sql("SELECT ". fill_select("cus", $cus_cols) ." FROM customers WHERE cus_id = '". data('customer') ."'");
	if ($row = sql_obj($res)) fill_data($row, $cus_cols, "cus");
}

//--------------------------------------------------------------------------------------------

#POST
//Bill
p2d("id", '', 'int');
p2d("date", date('Y-m-d'), 'date');
p2d("due", date('Y-m-d', strtotime("+14 Days")), 'date');
p2d("type", 'F');
p2d("paid", '0000-00-00', 'date');
p2d("payment_form", 'P');
//Bill Item
p2d("item", '', 'int');
p2d("price");
p2d("count", '', 'int');
p2d("tax", 21, 'int');
p2d("bill", data('id'));
//Customer
p2d("customer");
p2d("field_customer");
p2d("ico");
p2d("dic");
p2d("obec");
p2d("ulice");
p2d("psc");
p2d("cp");
p2d("telefon");
p2d("email");

if (post()){
	if (data('payment_form') == 'H') $_DATA['paid'] = date('Y-m-d');
	
	#New customer
	if (data("customer") == '+'){
		sql("INSERT INTO customers SET ". fill_sql("cus", $cus_cols) .", cus_nazev = '". data('field_customer') ."'");
		$_DATA['customer'] = sql_lastid();
	} else sql("UPDATE customers SET ". fill_sql("cus", $cus_cols) ." WHERE cus_id = '". data('customer') ."'");
	
	sql("UPDATE bills SET bil_date = '". data('date') ."', bil_due = '". data('due') ."' WHERE bil_id = '". data('id') ."'");
	
	#New bill?
	if (data('item')){
		$res = sql("SELECT 1 FROM bills WHERE bil_id = '". data('id') ."'");
		if (!sql_count($res)) sql("INSERT INTO bills SET ". fill_sql("bil", $cols) .", bil_insert_dt = NOW()");
		//else sql("UPDATE bills SET bil_date = '". data('date') ."' WHERE bil_id = '". data('id') ."'");
		
		sql("INSERT INTO bill_items SET ". fill_sql("bii", $bii_cols) ."");
		sql("UPDATE storage_items SET sti_available = 'N' WHERE sti_item = '". data('item') ."' AND sti_available = 'Y' ORDER BY sti_id ASC LIMIT ". data('count') . "");
	}
	
	Location(data('id'));
}

//--------------------------------------------------------------------------------------------

hide(array('count', 'buy'));

#CONTENT
print columns_start();
print column_start();
//--------------------------------//
print blok_start('Faktura');
//--------------------------------//
	print row_input('id', 'Číslo', '', '', array('keyup' => 'load_faktura();'));
	print row_date('date', 'Datum vystavení');
	print row_date('due', 'Datum splatnosti');
	print row_list('payment_form', 'Způsob úhrady', array('P' => 'Převodem', 'H' => 'Hotově'), '', false);
//--------------------------------//
print blok_end();
//--------------------------------//

print blok_start('Odběratel');
	print row_dd('customer', 'Název', 'customers', '', array('change' => 'load_customer();'));
	print row_multi_start();
		print row_input('ico', 'IČO');
		print row_input('dic', 'DIČ');
	print row_multi_end();
	print row_input('obec', 'Obec');
	print row_input('ulice', 'Ulice');
	print row_multi_start(); 
		print row_input('cp', 'Číslo popisné');
		print row_input('psc', 'PSČ');
	print row_multi_end();
	print row_input('telefon', 'Telefon');
	print row_input('email', 'Email');
print blok_end();

//--------------------------------//
print column_end();

print column_start();
//--------------------------------//
print blok_start('Zboží');
	print row_multi_start();
		print row_dd('item', 'Položka', 'items_available', '', array('change' => 'get_count();'));
		print row_info('kod', 'Kód', '');
	print row_multi_end();
	print row_info('buy', 'Skladová cena bez DPH', '', '', 'Kč');
	print row_input('price', 'Prodejní cena bez DPH', 'Kč');
	print row_input('count', 'Množství', 'ks'); 
print blok_end();
//--------------------------------//
print blok_start('Zboží na faktuře');
	include('./pages/vydej/porizeni/faktura/blok/zbozi.php');
print blok_end();
//--------------------------------//
print column_end();
print columns_end();

print save();
?>
<script type="text/javascript" id="script_faktura">
function get_count(){
	const item = get_field("item");
	
	add_class(id("row_count"), "hidden");
	add_class(id("row_buy"), "hidden");
	
	if (item != "") {
		ajicek2({
			'ajicek': 'change_count/'+ item,
			'success': function(data){
				del_el(id("row_count"));
				id("row_price").insertAdjacentHTML("afterend", data.data);
				
				set_field("kod", data.kod);
				set_field("buy", data.price);
				
				remove_class(id("row_buy"), "hidden");
				
				if (parseInt(data.max) > 1){
					del_el(id("script_count"));
					
					slider_init("count");
				}
			}
		});
	}
}

function load_customer(){
	const customer = get_field('customer');		
	ajicek2({
		'ajicek': 'load_customer/'+ customer,
		'success': function(data){
			set_field('ico', data.ico);
			set_field('dic', data.dic);
			set_field('obec', data.obec);
			set_field('ulice', data.ulice);
			set_field('cp', data.cp);
			set_field('psc', data.psc);
			set_field('telefon', data.telefon);
			set_field('email', data.email);
		}
	});
}

function load_faktura(){
	const paragon_id = get_field("id");
	const parent = id("blok_zbozi").parentNode;
	del_el(id("blok_zbozi"));
	
	ajicek2({
		'ajicek': 'faktura_table/'+ paragon_id,
		'success': function(data){
			parent.insertAdjacentHTML("beforeend", data.data);
		}
	});
}

del_el(id("script_faktura"));
</script>