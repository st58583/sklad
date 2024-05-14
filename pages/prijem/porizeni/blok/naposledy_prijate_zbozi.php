<?php
$res = sql("SELECT itm_nazev, itm_kod, sto_count, sto_price, sto_insert_dt
	FROM storage 
	LEFT JOIN items ON itm_id = sto_item 
	ORDER BY sto_id DESC 
	LIMIT 10
");
if (sql_count($res)){
	print '<div class="blok_div">';
	print '<table class="blok_table">';
	print '<thead>';
	print '<tr>';
	print '<th>Datum</th>';
	#print '<th>Kód</th>';
	print '<th>Zboží</th>';
	print '<th>Cena bez DPH</th>';
	print '<th>Počet</th>';
	print '</tr>';
	print '</thead>';
	print '<tbody>';
	
	while ($row = sql_obj($res)) {
		print '<tr>';
		print '<td>'. date_out($row->sto_insert_dt) .'</td>';
		#print '<td>'. $row->itm_kod .'</td>';
		print '<td>'. $row->itm_nazev .'</td>';
		print '<td>'. money($row->sto_price) .'</td>';
		print '<td>'. $row->sto_count .'</td>';
		print '</tr>';
	}
	
	print '</tbody>';
	print '</table>';
	print '</div>';
} else {
	info("Dosud nebyla přijata žádná položka");
}
?>