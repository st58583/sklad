<?php
#PAGES
//page_key => array(visible_in_menu, name_in_menu_and_title, subpages)
$DEFINED_PAGES = array(
	'domu' => array(1, 'Domů'),
	'prijem' => array(1, 'Příjem'),
	'vydej' => array(1, 'Výdej', array(
			'porizeni' => array(1, 'Pořízení', array(
				'paragon' => array(1, "Paragon do 10 000"),
				'faktura' => array(1, "Faktura"),
			)),
			'tisk_dokladu' => array(1, "Tisk dokladů", array(
				'tisk' => array(0, 'Doklad')
			)),
		)),
	'nastaveni' => array(1, 'Nastavení'),
);

#ARGS
$ARGS = array();
?>