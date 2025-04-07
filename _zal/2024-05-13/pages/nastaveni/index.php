<?php
#DATA
$TITLE = "Nastavení";

$cols = array("ico", "dic", "nazev", "telefon", "email", "obec", "ulice", "cp", "psc", "bank_account");

$res = sql("SELECT ". fill_select("acc", $cols) ." FROM account WHERE acc_id = 1");
if ($row = sql_obj($res)) fill_data($row, $cols, "acc");

//--------------------------------------------------------------------------------------------

#POST
p2d("ico");
p2d("dic");
p2d("nazev");
p2d("telefon");
p2d("email");
p2d("obec");
p2d("ulice");
p2d("cp");
p2d("psc");
p2d("bank_account");

if (post()){
	sql("UPDATE account SET ". fill_sql("acc", $cols) ." WHERE acc_id = 1");
	Location();
}

//--------------------------------------------------------------------------------------------

#CONTENT
print columns_start();
//--------------------------------//
print column_start();
print blok_start('Firemní údaje');
print row_input("ico", "IČO");
print row_input("dic", "DIČ");
print row_input("nazev", "Název");
print row_input("bank_account", "Číslo účtu");
print blok_end();

print blok_start("Kontakt");
print row_input("telefon", "Telefon");
print row_input("email", "Email");
print blok_end();

print column_end();

//--------------------------------//

print column_start();
print blok_start("Kontakt");
print row_input("obec", "Obec");
print row_input("ulice", "Ulice");
print row_input("cp", "Číslo popisné");
print row_input("psc", "PSČ");
print blok_end();
print column_end();

//--------------------------------//

print column_start();
print column_end();

//--------------------------------//
print columns_end();

print save();
?>