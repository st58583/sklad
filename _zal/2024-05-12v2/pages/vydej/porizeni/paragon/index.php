<?php
#DATA
$TITLE = "Paragon do 10.000";

$bill_id = g_arg(1);
if (!$bill_id) {
	$res = sql("SELECT (COALESCE(MAX(bil_id),0) + 1) AS cislo FROM bills WHERE DATE_FORMAT(bil_date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')");
	if ($row = sql_obj($res)) $bill_id = $_DATA['id'] = date('ym') . str_pad($row->cislo, 5, '0', STR_PAD_LEFT);
}

$cols = array("date", "locked");

if ($bill_id) {
	$res = sql("SELECT ". fill_select("bil", $cols) ." FROM bills WHERE bil_id = '". $bill_id ."'");
	if ($row = sql_obj($res)) fill_data($row, $cols, "bil");
}

//--------------------------------------------------------------------------------------------

#POST
p2d("id", '', 'int');
p2d("date", date('Y-m-d'), 'date');
p2d("item", '', 'int');
p2d("price");
p2d("count", '', 'int');

if (post()){
	#New bill?
	if (data("supplier") == '+'){
		$_DATA['nazev'] = data('field_supplier');
		sql("INSERT INTO suppliers SET ". fill_sql("sup", $supplier_cols) ."");
		$_DATA['supplier'] = sql_lastid();
	}
	
	#New item?
	if (data("count")) {
		sql("INSERT INTO storage SET ". fill_sql("sto", $cols) .", sto_insert_dt = NOW()");
		$lid = sql_lastid();
		for ($i = 0; $i < data('count'); $i++) sql("INSERT INTO storage_items SET sti_item = '". data('item') ."', sti_storage = '". $lid ."'");
	}
	
	Location();
}

//--------------------------------------------------------------------------------------------

hide(array('count'));

#CONTENT
print columns_start();
print column_start();
//--------------------------------//
print blok_start('Paragon');
//--------------------------------//
		print row_input('id', 'ID', '', '');
	print row_date('date', 'Datum');
//--------------------------------//
print blok_end();
//--------------------------------//

print blok_start('Zboží');
	print row_multi_start();
		print row_dd('item', 'Položka', 'items_available', '', array('change' => 'get_count();'));
		print row_info('kod', 'Kód', '');
	print row_multi_end();
	print row_input('price', 'Cena s DPH', 'Kč');
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
	
	if (item != "") {
		ajicek2({
			'ajicek': 'change_count/'+ item,
			'success': function(data){
				del_el(id("row_count"));
				id("row_price").insertAdjacentHTML("afterend", data.data);
				slider_init("count");
			}
		});
	}
}

/*function set_ico(){
	const supplier = get_field('supplier');
	ajicek2({
		'ajicek': 'supplier_ico/'+ supplier,
		'success': function(data){
			set_field('supplier_ico', data.ico);
		}
	});
}

function storage_info(){
	const item = get_field('item');
	ajicek2({
		'ajicek': 'storage_info/'+ item,
		'success': function(data){
			set_field('sklad_pocet', data.pocet);
			set_field('sklad_cena', data.cena);
		}
	});
}

function show_new_item(){
	const item = get_field('item');
	
	const kod_row = id("row_kod");
	
	if (item == "+") {
		remove_class(kod_row, "hidden");
	} else {
		add_class(kod_row, "hidden");
	}
}

function show_new_supplier(){
	const supplier = get_field('supplier');
	
	const ico_row = id("row_ico");
	const dic_row = id("row_dic");
	const telefon_row = id("row_telefon");
	const email_row = id("row_email");
	
	const obec_row = id("row_obec");
	const ulice_row = id("row_ulice");
	const psc_row = id("row_psc");
	const cp_row = id("row_cp");
	
	const supplier_ico_row = id("row_supplier_ico");
	
	if (supplier == "+") {
		add_class(supplier_ico_row, "hidden");
		
		remove_class(ico_row, "hidden");
		remove_class(dic_row, "hidden");
		remove_class(telefon_row, "hidden");
		remove_class(email_row, "hidden");
		remove_class(obec_row, "hidden");
		remove_class(ulice_row, "hidden");
		remove_class(psc_row, "hidden");
		remove_class(cp_row, "hidden");
	} else {
		remove_class(supplier_ico_row, "hidden");
		
		add_class(ico_row, "hidden");
		add_class(dic_row, "hidden");
		add_class(telefon_row, "hidden");
		add_class(email_row, "hidden");
		add_class(obec_row, "hidden");
		add_class(ulice_row, "hidden");
		add_class(psc_row, "hidden");
		add_class(cp_row, "hidden");
	}
}*/

del_el(id("script_paragon"));
</script>