<?php
#PAGES
//page_key => array(visible_in_menu, name_in_menu_and_title, subpages)
$DEFINED_PAGES = array(
	'domu' => array(1, 'Domů'),
	'prijem' => array(1, 'Příjem', array(
			'porizeni' => array(1, 'Pořízení', array(
				'prijem_na_sklad' => array(1, "Příjem na sklad"),
				'prevody' => array(1, "Převody"),
			)),
			'tisk_dokladu' => array(1, "Tisk dokladů")
		)),
	'vydej' => array(1, 'Výdej'),
	'nastaveni' => array(1, 'Nastavení'),
);

#ARGS
$ARGS = array();
?>