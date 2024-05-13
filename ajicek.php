<?php
session_start();
require('./conf/config.php');
include('./lib/library.php');

//header("Content-Type: application/json; charset: utf-8");
header("Content-Type: text/html; charset: utf-8");

sql_connect();

$args = explode('/', g_get("args"));
$cat = $args[0] ?? false;
$id = $args[1] == "dd_value" ? $args[2] : false;

if ($cat == "languages") {
	$val = $args[1];
	
	$list = array();
	$WHERE = $id ? "lan_id = '". $id ."'" : "lan_name LIKE '". $val ."%'";
	
	if ($val){
		$res = sql("SELECT lan_id, lan_name
			FROM languages
			WHERE ". $WHERE ." 
			ORDER BY lan_name ASC, LENGTH(lan_name) ASC
			LIMIT 5
		");
		while($row = sql_obj($res)) {
			$list[$row->lan_id] = $row->lan_name;
		}
	}
	if (!count($list)) $list = empty_suggest_list();

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "words") {
	$val = $args[1];
	
	$list = array();	
	$WHERE = $id ? "wor_id = '". $id ."'" : "wor_value LIKE '". $val ."%'";
	
	if ($val){
		$res = sql("SELECT wor_id, wor_value
			FROM words
			WHERE ". $WHERE ." 
			ORDER BY wor_value ASC, LENGTH(wor_value) ASC
			LIMIT 5
		");
		while ($row = sql_obj($res)) {
			$list[$row->wor_id] = $row->wor_value;
		}		
	}
	if (!count($list)) $list = empty_suggest_list($val);

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "word_types") {
	$val = $args[1];
	
	$list = array();
	$WHERE = $id ? "acc_id = '". $id ."'" : "acc_value LIKE '". $val ."%'";
	
	if ($val){
		$res = sql("SELECT acc_id, acc_nazev
			FROM account
			WHERE ". $WHERE ."
			ORDER BY acc_nazev ASC, LENGTH(acc_nazev) ASC
			LIMIT 5
		");
		while($row = sql_obj($res)) {
			$list[$row->acc_id] = $row->acc_nazev;
		}
	}
	if (!count($list)) $list = empty_suggest_list();

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "categories") {
	$val = $args[1];
	
	$list = array();
	$WHERE = $id ? "cat_id = '". $id ."'" : "cat_name LIKE '". $val ."%'";
	
	if ($val){
		$res = sql("SELECT cat_id, cat_name
			FROM categories
			WHERE ". $WHERE ."
			ORDER BY cat_name ASC, LENGTH(cat_name) ASC
			LIMIT 5
		");
		while($row = sql_obj($res)) {
			$list[$row->cat_id] = $row->cat_name;
		}
	}
	if (!count($list)) $list = empty_suggest_list($val);

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "supplier_ico") {
	$val = $args[1];
	
	$ico = '';
	
	if ($val){
		$res = sql("SELECT sup_ico FROM suppliers WHERE sup_id = '". $val ."'");
		if ($row = sql_obj($res)) $ico = $row->sup_ico;
	}

	echo json_encode(array("ico" => $ico));
	exit;
}

if ($cat == "supplier_nazev") {
	$val = $args[1];
	
	$list = array();
	$WHERE = $id ? "sup_id = '". $id ."'" : "sup_ico LIKE '". $val ."%' OR sup_nazev LIKE '". $val ."%'";
	
	if ($val){
		$res = sql("SELECT sup_id, sup_nazev
			FROM suppliers
			WHERE ". $WHERE ."
			ORDER BY sup_nazev ASC, LENGTH(sup_nazev) ASC
			LIMIT 5
		");
		while($row = sql_obj($res)) {
			$list[$row->sup_id] = $row->sup_nazev;
		}
	}
	if (!count($list)) $list = empty_suggest_list($val);

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "items") {
	$val = $args[1];
	
	$list = array();
	$WHERE = $id ? "itm_id = '". $id ."'" : "itm_kod LIKE '". $val ."%' OR itm_nazev LIKE '%". $val ."%'";
	
	if ($val){
		$res = sql("SELECT itm_id, itm_nazev
			FROM items
			WHERE ". $WHERE ."
			ORDER BY itm_nazev ASC, LENGTH(itm_nazev) ASC
			LIMIT 5
		");
		while($row = sql_obj($res)) {
			$list[$row->itm_id] = $row->itm_nazev;
		}
	}
	if (!count($list)) $list = empty_suggest_list($val);

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "storage_info") {
	$val = $args[1];
	
	$pocet = $cena = 0;
		
	if ($val){
		/*$res = sql("SELECT sti_id, sto_price
			FROM storage_items
			LEFT JOIN storage ON sto_id = sti_storage
			WHERE sti_item = '". $val ."' AND sti_available = 'Y'
		");
		while($row = sql_obj($res)) {
			$pocet++;
			$cena += $row->sto_price;
		}
		if ($pocet) $cena = round($cena/$pocet, 2);*/
	
		$res = sql("SELECT 1 FROM storage_items WHERE sti_item = '". $val ."' AND sti_available = 'Y'");
		$pocet = sql_count($res);
		
		$res = sql("SELECT itm_avg FROM items WHERE itm_id = '". $val ."'");
		$cena = ($row = sql_obj($res)) ? money($row->itm_avg) : 0;
	}

	echo json_encode(array("pocet" => $pocet, "cena" => $cena));
	exit;
}

if ($cat == "items_available") {
	$val = $args[1];
	
	$list = array();
	
	if ($val){
		$res = sql("SELECT sti_item, itm_nazev, COUNT(sti_item) AS pocet
			FROM storage_items
			LEFT JOIN items ON itm_id = sti_item
			WHERE (itm_kod LIKE '". $val ."%' OR itm_nazev LIKE '%". $val ."%') AND sti_available = 'Y'
			GROUP BY sti_item
			ORDER BY itm_nazev ASC, LENGTH(itm_nazev) ASC
			LIMIT 5
		");
		while($row = sql_obj($res)) {
			$list[$row->sti_item] = $row->itm_nazev;
		}
	}
	if (!count($list)) $list = empty_suggest_list();

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "change_count"){
	$val = $args[1];
	$kod = '';
	$price = 0;	
	
	$res = sql("SELECT 1 FROM storage_items WHERE sti_item = '". $val ."' AND sti_available = 'Y'");
	$max = sql_count($res);
	
	$res = sql("SELECT itm_kod, itm_avg FROM items WHERE itm_id = '". $val ."'");
	if ($row = sql_obj($res)) {
		$kod = $row->itm_kod;
		$price = money($row->itm_avg);
		$price_dph = money($row->itm_avg * 1.21);
	}
	
	ob_start();
		if ($max > 1) print row_slider("count", "Množství", 1, $max);
		else print row_info('count', 'Množství', 1, 'Na skladě je pouze jediná položka, množství nelze změnit.', 'ks', 1);
	$ret = ob_get_clean();
	
	echo json_encode(array("data" => $ret, "max" => $max, "kod" => $kod, "price" => $price, "price_dph" => $price_dph));
	exit;
}

if ($cat == "paragon_table"){
	$_DATA['id'] = $args[1];
	
	ob_start();
		include('./pages/vydej/porizeni/paragon/blok/zbozi.php');
	$ret = ob_get_clean();
	
	echo json_encode(array("data" => $ret));
	exit;
}

if ($cat == "faktura_table"){
	$_DATA['id'] = $args[1];
	
	ob_start();
		include('./pages/vydej/porizeni/faktura/blok/zbozi.php');
	$ret = ob_get_clean();
	
	echo json_encode(array("data" => $ret));
	exit;
}

if ($cat == "customers"){
	$val = $args[1];
	
	$list = array();
	$WHERE = $id ? "cus_id = '". $id ."'" : "cus_nazev LIKE '%". $val ."%' OR cus_id = '". $val ."'";
	
	if ($val){
		$res = sql("SELECT cus_id, cus_nazev
			FROM customers
			WHERE ". $WHERE ."
			ORDER BY cus_nazev ASC, LENGTH(cus_nazev) ASC
			LIMIT 5
		");
		while($row = sql_obj($res)) {
			$list[$row->cus_id] = $row->cus_nazev;
		}
	}
	if (!count($list)) $list = empty_suggest_list($val);

	echo json_encode(array("data" => suggest_list($list)));
	exit;
}

if ($cat == "load_customer"){
	$val = $args[1];
	
	$nazev = $ico = $dic = $obec = $ulice = $psc = $telefon = $email = $cp = '';
	
	if ($val){
		$res = sql("SELECT cus_nazev, cus_ico, cus_dic, cus_obec, cus_ulice, cus_cp, cus_psc, cus_telefon, cus_email
			FROM customers
			WHERE cus_id = '". $val ."'
			LIMIT 1
		");
		while($row = sql_obj($res)) {
			$nazev = $row->cus_nazev;
			$ico = $row->cus_ico;
			$dic = $row->cus_dic;
			$obec = $row->cus_obec;
			$ulice = $row->cus_ulice;
			$cp = $row->cus_cp;
			$psc = $row->cus_psc;
			$telefon = $row->cus_telefon;
			$email = $row->cus_email;
		}
	}

	echo json_encode(array("nazev" => $nazev, "ico" => $ico, "dic" => $dic, "obec" => $obec, "ulice" => $ulice, "psc" => $psc, "cp" => $cp, "telefon" => $telefon, "email" => $email));
	exit;
}

exit;
?>