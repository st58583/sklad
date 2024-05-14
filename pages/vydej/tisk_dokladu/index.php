<?php
$TITLE = "Pořízení";

$typ_arr = array('P' => 'Paragon', 'F' => 'Faktura');
$typ_page_arr = array('P' => 'paragon', 'F' => 'faktura');

//include('./pages/vydej/tisk_dokladu/inc/arg.php');

#CONTENT
print columns_start();
//--------------------------------//
print column_start();

print blok_start("Vydané paragony a faktury připravené k tisku");
	include('./pages/vydej/tisk_dokladu/blok/vypis.php');
print blok_end();

print column_end();

//--------------------------------//
print columns_end();
?>