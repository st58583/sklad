<?php
$res = sql("SELECT itm_nazev, itm_kod, bii_count, bii_tax, bii_price
	FROM bill_items 
	LEFT JOIN items ON itm_id = bii_item 
	WHERE bii_bill = '". $bill_id ."'
	ORDER BY bii_id ASC 
");
if (sql_count($res)){
	print '<div class="blok_div">';
	print '<table class="blok_table">';
	print '<thead>';
	print '<tr>';
	print '<th>Kód</th>';
	print '<th>Zboží</th>';
	print '<th>Počet</th>';
	print '<th>Cena</th>';
	print '</tr>';
	print '</thead>';
	print '<tbody>';
	
	while ($row = sql_obj($res)) {
		print '<tr>';
		/*print '<td>'. date_out($row->sto_insert_dt) .'</td>';
		#print '<td>'. $row->itm_kod .'</td>';
		print '<td>'. $row->itm_nazev .'</td>';
		print '<td>'. $row->sto_price .'</td>';
		print '<td>'. $row->sto_count .'</td>';*/
		print '</tr>';
	}
	
	print '</tbody>';
	print '</table>';
	print '</div>';
} else {
	info("Dosud nebyla přijata žádná položka");
}
?>