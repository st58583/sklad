<?php
#DATA
$TITLE = "Nastavení";

$cols = array("ico", "dic", "nazev", "telefon", "email", "obec", "ulice", "cp", "psc", "bank_account");

$res = sql("SELECT ". fill_select("acc", $cols) ." FROM account WHERE acc_id = 1");
if ($row = sql_obj($res)) fill_data($row, $cols, "acc");

//--------------------------------------------------------------------------------------------

include('./pages/nastaveni/inc/post.php');

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
print blok_start("RESET");
print row_switch('show_reset', 'Zobrazit reset', '', array("change" => "show_reset();"));
print '<button name="reset" class="m5 hidden" value="reset" id="reset_btn">RESET</button>';
print blok_end();
print column_end();

//--------------------------------//
print columns_end();

print save();
?>
<script type="text/javascript" id="script_settings">
function show_reset(){
	const val = get_field('show_reset');
	
	if (val == 'Y') remove_class(id('reset_btn'), 'hidden');
	else add_class(id('reset_btn'), 'hidden');
}

del_el(id('script_settings'));
</script>