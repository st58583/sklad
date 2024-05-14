<?php
$TITLE = "Pořízení";

#CONTENT
print columns_start();
//--------------------------------//
print column_start();

print blok_start("Seznam přijatého zboží");
	include('./pages/prijem/blok/vypis.php');
print blok_end();

print column_end();

//--------------------------------//
print columns_end();
?>