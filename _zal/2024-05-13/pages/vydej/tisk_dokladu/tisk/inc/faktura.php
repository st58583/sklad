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

$dodavatel = '';
$res = sql("SELECT * FROM account WHERE acc_id = 1");
if ($row = sql_obj($res)){
	$dodavatel .= '<strong>IČO:</strong> &nbsp;&nbsp;'. $row->acc_ico .'<br />';
	$dodavatel .= '<strong>DIČ:</strong> '. $row->acc_dic .'<br /><br />';
	$dodavatel .= '<strong>'. $row->acc_nazev .'</strong><br />';
	$dodavatel .= $row->acc_ulice .' '. $row->acc_cp .'<br />';
	$dodavatel .= $row->acc_psc .', '. $row->acc_obec .'';
	
	$dodavatel_info = 'Telefon: '. $row->acc_telefon .'<br />';;
	$dodavatel_info .= 'Email: '. $row->acc_email .'<br />';;
	$dodavatel_info .= 'Bankovní účet: <strong>'. $row->acc_bank_account .'</strong>';
}

$odberatel = '';
$res = sql("SELECT * FROM customers WHERE cus_id = '". $customer ."'");
if ($row = sql_obj($res)){
	$odberatel .= '<strong>IČO:</strong> &nbsp;&nbsp;'. $row->cus_ico .'<br />';
	$odberatel .= '<strong>DIČ:</strong> '. $row->cus_dic .'<br /><br />';
	$odberatel .= '<strong>'. $row->cus_nazev .'</strong><br />';
	$odberatel .= $row->cus_ulice .' '. $row->cus_cp.'<br />';
	$odberatel .= $row->cus_psc .', '. $row->cus_obec.'';
}

$bill = '';
$res = sql("SELECT * FROM bills WHERE bil_id = '". $id ."'");
if ($row = sql_obj($res)){
	$bill .= 'Datum splatnosti: <strong>'. date_out($row->bil_due) .'</strong><br /><br />';
	$bill .= 'Forma úhrady: '. $forma_uhrady_arr[$row->bil_payment_form] .'<br />';
	$bill .= 'Datum vystavení: '. date_out($row->bil_date) .'<br />';
	$bill .= 'Datum zdanitelného plnění: '. date_out($row->bil_date) .'<br />';
}

?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<title>Faktura</title>
	<base href="http://localhost/sklad/" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css?2024-05-13e" />
	<!--<link rel="stylesheet" media="print" href="./css/print.css" />-->
	<script type="text/javascript" src="js/js.js?2024-05-13c"></script>
	<style type="text/css" media="all">
		* {font-family: "Courier New", monospace; box-sizing: border-box; margin: 0; padding: 0;}
		table#head {border: 1px solid #000; width: 800px; border-collapse: collapse;}
		table#body {border: 0px solid #000; width: 800px; text-align: left; border-collapse: collapse;}
		table#foot {border: 0px solid #000; width: 800px; text-align: left; border-collapse: collapse;}
		td {vertical-align: top; text-align: left; padding: 5px;}
		.right {text-align: right;}
	</style>
</head>
<body>
	<table id="head" border="1" cellspacing="0" cellpadding="5" style="width: 800px;">
		<thead>
			<tr><td colspan="2" style="font-weight: bold;">FAKTURA - Daňový doklad</td></tr>
			<tr><td colspan="2" >Číslo dokladu: <strong><?php print $id ?></strong></td></tr>
			<tr>
				<td><strong>Dodavatel:</strong><p><?php print $dodavatel; ?></p></td>
				<td><strong>Odběratel:</strong><p><?php print $odberatel; ?></p></td>
			</tr>
			<tr>
				<td><p><?php print $dodavatel_info; ?></p></td>
				<td><p><?php print $bill; ?></p></td>
			</tr>
		</thead>
	</table>
	<table id="body">
		<thead>
			<tr>
				<td></td><td>Kód</td><td colspan="4">Název zboží</td>
			</tr>
			<tr>
				<td></td><td>Množství</td><td class="right">Jedn. cena</td><td class="right">% DPH</td><td class="right">DPH Kč</td><td class="right">Částka Kč</td>
			</tr>
		</thead>
		<tbody>
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
					
					print '<tr>';
					print '<td>'. $n .'</td><td>'. $row->itm_kod .'</td><td colspan="4">'. $row->itm_nazev .'</td>';
					print '</tr>';
					print '<tr>';
					print '<td></td><td>'. $row->bii_count .'ks</td><td class="right">'. money($row->bii_price) .'</td><td class="right">21.00</td><td class="right">'. money($row->bii_price * 0.21) .'</td><td class="right">'. money($row->bii_price * 1.21) .'</td>';
					print '</tr>';
					
					$n++;
				}
			?>
			<tr><td colspan="7" style="border-bottom: 3px solid #000;"></td></tr>
		</tbody>
		<tfoot>
			<tr>
				<td></td><td>Sazba DPH</td><td>Základ</td><td>Částka</td><td colspan="2" class="right">Celkem</td>
			</tr>
			<tr>
				<td></td><td>21 %</td><td><?php print money($price); ?></td><td><?php print money($price * 0.21); ?></td><td colspan="2" class="right"><strong><?php print money($price * 1.21); ?></strong></td>
			</tr>
		</tfoot>
	</table>
	<table id="foot">
		<tfoot>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2">Zboží a fakturu převzal:</td></tr>
			<tr><td colspan="2">Děkujeme za Vaší objednávku a těsíme se na další spolupráci</td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2"></td></tr>
			<tr><td colspan="2" class="right">..................................</td></tr>
			<tr><td>Vystavil:</td><td class="right">Razítko a podpis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
		</tfoot>
	</table>
</body>
</html>