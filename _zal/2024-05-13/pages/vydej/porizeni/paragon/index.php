<?php
#DATA
$TITLE = "Paragon do 10 000";

$_DATA['id'] = g_arg(0);
if (!data('id')) {
	$res = sql("SELECT COALESCE(MAX(bil_id),0) AS cislo FROM bills WHERE DATE_FORMAT(bil_date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')");
	if ($row = sql_obj($res)) $_DATA['id'] = $row->cislo ? $row->cislo + 1 : date('ym') . str_pad($row->cislo + 1, 5, '0', STR_PAD_LEFT);
}

$cols = array("date", "id", "due", "type", "paid", "payment_form");
$bii_cols = array("item", "price", "count", "tax", "bill");

if (data('id')) {
	$res = sql("SELECT ". fill_select("bil", $cols) ." FROM bills WHERE bil_id = '". data('id') ."'");
	if ($row = sql_obj($res)) fill_data($row, $cols, "bil");
}

//--------------------------------------------------------------------------------------------

#POST
//Bill
p2d("id", '', 'int');
p2d("date", date('Y-m-d'), 'date');
p2d("due", date('Y-m-d'), 'date');
p2d("type", 'P');
p2d("payment_form", 'H');
p2d("paid", date('Y-m-d'), 'date');
//Bill Item
p2d("item", '', 'int');
p2d("price");
p2d("count", '', 'int');
p2d("tax", 21, 'int');
p2d("bill", data('id'));

if (post()){	
	#New bill?	
	if (data('item')){
		$res = sql("SELECT 1 FROM bills WHERE bil_id = '". data('id') ."'");
		if (!sql_count($res)) sql("INSERT INTO bills SET ". fill_sql("bil", $cols) .", bil_insert_dt = NOW()");
		else sql("UPDATE bills SET bil_date = '". data('date') ."' WHERE bil_id = '". data('id') ."'");
		
		sql("INSERT INTO bill_items SET ". fill_sql("bii", $bii_cols) ."");
		sql("UPDATE storage_items SET sti_available = 'N' WHERE sti_item = '". data('item') ."' AND sti_available = 'Y' ORDER BY sti_id ASC LIMIT ". data('count') . "");
	}
	
	Location(data('id'));
}

//--------------------------------------------------------------------------------------------

hide(array('count', 'buy', 'buy_dph'));

#CONTENT
print columns_start();
print column_start();
//--------------------------------//
print blok_start('Paragon');
//--------------------------------//
	print row_input('id', 'Číslo', '', '', array('keyup' => 'load_paragon();'));
	print row_date('date', 'Datum');
//--------------------------------//
print blok_end();
//--------------------------------//

print blok_start('Zboží');
	print row_multi_start();
		print row_dd('item', 'Položka', 'items_available', '', array('change' => 'get_count();'));
		print row_info('kod', 'Kód', '');
	print row_multi_end();
	print row_multi_start();
		print row_info('buy', 'Skladová cena bez DPH', '', '', 'Kč');
		print row_info('buy_dph', 'Skladová cena s DPH', '', '', 'Kč');
	print row_multi_end();
	print row_input('price', 'Prodejní cena s DPH', 'Kč');
	print row_input('count', 'Množství', 'ks'); 
print blok_end();

//--------------------------------//
print column_end();

print column_start();
//--------------------------------//
print blok_start('Zboží na paragonu');
	include('./pages/vydej/porizeni/paragon/blok/zbozi.php');
print blok_end();
//--------------------------------//
print column_end();
print columns_end();

print save();
?>
<script type="text/javascript" id="script_paragon">
function get_count(){
	const item = get_field("item");
	
	add_class(id("row_count"), "hidden");
	add_class(id("row_buy"), "hidden");
	add_class(id("row_buy_dph"), "hidden");
	
	if (item != "") {
		ajicek2({
			'ajicek': 'change_count/'+ item,
			'success': function(data){
				del_el(id("row_count"));
				id("row_price").insertAdjacentHTML("afterend", data.data);
				
				set_field("kod", data.kod);
				set_field("buy", data.price);
				set_field("buy_dph", data.price_dph);
				
				remove_class(id("row_buy"), "hidden");
				remove_class(id("row_buy_dph"), "hidden");
				
				if (parseInt(data.max) > 1){
					del_el(id("script_count"));
					slider_init("count");
				}
			}
		});
	}
}

function load_paragon(){
	const paragon_id = get_field("id");
	const parent = id("blok_zbozi").parentNode;
	del_el(id("blok_zbozi"));
	
	ajicek2({
		'ajicek': 'paragon_table/'+ paragon_id,
		'success': function(data){
			parent.insertAdjacentHTML("beforeend", data.data);
		}
	});
}

del_el(id("script_paragon"));
</script>