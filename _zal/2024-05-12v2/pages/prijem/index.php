<?php
#DATA
$TITLE = "Příjem na sklad";

$cols = array("supplier", "item", "price", "count");
$supplier_cols = array("nazev", "ico", "dic", "obec", "ulice", "psc", "cp", "telefon", "email");
$item_cols = array("nazev", "kod");

//--------------------------------------------------------------------------------------------

#POST
p2d("supplier");
p2d("item");
p2d("price");
p2d("count");
//Supplier
p2d("field_supplier");
p2d("ico");
p2d("dic");
p2d("obec");
p2d("ulice");
p2d("psc");
p2d("cp");
p2d("telefon");
p2d("email");
//Item
p2d("field_item");
p2d("kod");

if (post()){
	#New Supplier?
	if (data("supplier") == '+'){
		$_DATA['nazev'] = data('field_supplier');
		sql("INSERT INTO suppliers SET ". fill_sql("sup", $supplier_cols) ."");
		$_DATA['supplier'] = sql_lastid();
	}
	
	#New Item?
	if (data("item") == '+'){
		$_DATA['nazev'] = data('field_item');
		sql("INSERT INTO items SET ". fill_sql("itm", $item_cols) ."");
		$_DATA['item'] = sql_lastid();
	}
	
	#New Storage?
	if (data("count")) {
		sql("INSERT INTO storage SET ". fill_sql("sto", $cols) .", sto_insert_dt = NOW()");
		$lid = sql_lastid();
		for ($i = 0; $i < data('count'); $i++) sql("INSERT INTO storage_items SET sti_item = '". data('item') ."', sti_storage = '". $lid ."'");
	}
	
	Location();
}

//--------------------------------------------------------------------------------------------

hide(array('ico', 'dic', 'telefon', 'email', 'obec', 'ulice', 'psc', 'cp', 'kod'));

#CONTENT
print columns_start();
print column_start();
//--------------------------------//
print blok_start('Dodavatel');
//--------------------------------//
	print columns_start();
	print column_start();
		print row_dd('supplier', 'Název', 'supplier_nazev', '', array('change' => 'set_ico(); show_new_supplier();'));
		print row_input('ico', 'IČO');
		print row_input('dic', 'DIČ');
		print row_input('telefon', 'Telefon');
		print row_input('email', 'Email');
	print column_end();
	print column_start();
		print row_info('supplier_ico', 'IČO', '');
		print row_input('obec', 'Obec');
		print row_input('ulice', 'Ulice');
		print row_input('psc', 'PSČ');
		print row_input('cp', 'Číslo popisné');
	print column_end();
	print columns_end();
//--------------------------------//
print blok_end();
//--------------------------------//
print column_end();
print columns_end();


print columns_start();
print column_start();
//--------------------------------//
print blok_start('Zboží');
	print row_dd('item', 'Položka', 'items', '', array('change' => 'storage_info(); show_new_item();'));
	print row_input('kod', 'Kód');
	print row_multi_start();
		print row_input('price', 'Cena bez DPH', 'Kč');
		print row_input('count', 'Množství', 'ks'); 
	print row_multi_end();
print blok_end();
//--------------------------------//
print blok_start('Skladové zásoby');
	print row_info('sklad_pocet', 'Počet položek na skladu', '', '', 'ks');
	print row_info('sklad_cena', 'Průměrná cena', '', '', 'Kč');
print blok_end();
//--------------------------------//
print column_end();

print column_start();
//--------------------------------//
print blok_start('Naposledy přijaté zboží');
	include('./pages/prijem/blok/naposledy_prijate_zbozi.php');
print blok_end();
//--------------------------------//
print column_end();
print columns_end();

print save();
?>
<script type="text/javascript" id="script_prijem_na_sklad">
function set_ico(){
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
}

del_el(id("script_prijem_na_sklad"));
</script>