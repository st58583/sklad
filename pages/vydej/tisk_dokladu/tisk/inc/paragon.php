<?php
$forma_uhrady_arr = array('P' => 'Převodem', 'H' => 'Hotově');

$id = g_arg(0);
$res = sql("SELECT bil_id, bil_customer
	FROM bills 
	WHERE bil_id = '". $id ."'
");
if ($row = sql_obj($res)) {
	$customer = $row->bil_customer;
}

$dodavatel = $telefon = $email = '';
$res = sql("SELECT * FROM account WHERE acc_id = 1");
if ($row = sql_obj($res)){
	$telefon = 'Telefon: '. $row->acc_telefon;
	$email = 'Email: '. $row->acc_email;
	
	$nazev = $row->acc_nazev;
	$radek2 = $row->acc_ulice .' '. $row->acc_cp;
	$radek2_l = mb_strlen($radek2);
	for ($n = $radek2_l; $n < 24; $n++) $radek2 .= '&nbsp;';
	$radek2 .= 'IČ:&nbsp;&nbsp;&nbsp;&nbsp;'. $row->acc_ico;
	
	$radek3 = $row->acc_psc .', '. $row->acc_obec;
	$radek3_l = mb_strlen($radek3);
	for ($n = $radek3_l; $n < 24; $n++) $radek3 .= '&nbsp;';
	$radek3 .= 'DIČ:&nbsp;'. $row->acc_dic;
}

$bill = '';
$res = sql("SELECT * FROM bills WHERE bil_id = '". $id ."'");
if ($row = sql_obj($res)){
	$radek5 = '';
	for ($n = 0; $n < 15; $n++) $radek5 .= '&nbsp;';
	$radek5 .= date_out($row->bil_date);
}

?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<title>Paragon</title>
	<base href="http://localhost/sklad/" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css?2024-05-13e" />
	<!--<link rel="stylesheet" media="print" href="./css/print.css" />-->
	<script type="text/javascript" src="js/js.js?2024-05-13c"></script>
	<style type="text/css" media="all">
		* {font-family: "Courier New", monospace; box-sizing: border-box; margin: 0; padding: 0;}
		table#head {border: 1px solid #000; width: 200px; border-collapse: collapse;}
		table#body {border: 0px solid #000; width: 200px; text-align: left; border-collapse: collapse;}
		table#foot {border: 0px solid #000; width: 200px; text-align: left; border-collapse: collapse;}
		td {vertical-align: top; text-align: left; padding: 5px;}
		.right {text-align: right;}
	</style>
</head>
<body>
	<span>Zjednodušený daňový doklad: <?php print $id ?></span><br />
	<span>########################################</span><br />
	<span><?php print $nazev ?></span><br />
	<span><?php print $radek2 ?></span><br />
	<span><?php print $radek3 ?></span><br />
	<span>Datum uskutečnění zdanitelného plnění:</span><br />
	<span><?php print $radek5 ?></span><br />
	<span>########################################</span><br />
	<?php
		$price = 0;
		$n = 1;
	
		$res = sql("SELECT bii_count, bii_price, itm_kod, itm_nazev 
			FROM bill_items 
			LEFT JOIN items ON itm_id = bii_item
			WHERE bii_bill = '". $id ."'
		");
		while ($row = sql_obj($res)) {
			$price += $row->bii_price * $row->bii_count;
			
			//Radek 1
			
			$radek1 = '<span>';			
			if (strlen($n) == 1) $radek1 .= '&nbsp;';
			$radek1 .= $n .'&nbsp;';			
			$radek1 .= $row->itm_nazev;
			$letter_count = 3 + mb_strlen($row->itm_nazev);
			for ($k = $letter_count; $k < 36; $k++) $radek1 .= '&nbsp;';
			$radek1 .= '21 %';			
			$radek1 .= '</span><br />';
			
			print $radek1;
			
			//Radek 2
			$radek2 = '<span>';
			$radek2 = 'Počet:';
			$letter_count = mb_strlen($row->bii_count);
			for ($k = $letter_count; $k < 4; $k++) $radek2 .= '&nbsp;';
			$radek2 .= $row->bii_count .'&nbsp;&nbsp;&nbsp;';
			$letter_count = mb_strlen($row->bii_price .'/ks');
			for ($k = $letter_count; $k < 6; $k++) $radek2 .= '&nbsp;';
			$radek2 .= $row->bii_price .'/ks';
			$letter_count = mb_strlen($row->bii_price * $row->bii_count .' Kč');
			for ($k = $letter_count; $k < 13; $k++) $radek2 .= '&nbsp;';
			$radek2 .= $row->bii_price .'&nbsp;Kč';
			$radek2 .= '</span><br />';
			
			print $radek2;
			
			$n++;
		}
	?>
	<span>&nbsp;======================================&nbsp;</span><br />
	<?php
		$celkem_spaces = '';
		$letter_count = mb_strlen(number_format($price, 2, '.', '') .' Kč');
		for ($k = $letter_count; $k < 32; $k++) $celkem_spaces .= '&nbsp;';
		$celkem_spaces .= number_format($price, 2, '.', '') .'&nbsp;Kč';
	?>
	<span>&nbsp;Celkem<?php print $celkem_spaces?>&nbsp;</span><br />
	<span>----------------------------------------</span><br />
	<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceny stanoveny dohodou.</span><br />
	<?php
		$radek = '<span>';
		$letter_count = floor(mb_strlen($telefon)/2);
		for ($k = $letter_count; $k < 20; $k++) $radek .= '&nbsp;';
		$radek .= $telefon;
		$radek .= '</span><br />';
		
		print $radek;
		
		$radek = '<span>';
		$letter_count = floor(mb_strlen($email)/2);
		for ($k = $letter_count; $k < 20; $k++) $radek .= '&nbsp;';
		$radek .= $email;
		$radek .= '</span><br />';
		
		print $radek;
	?>
</body>
</html>