<?php
$res = sql("SELECT sto_id, sto_insert_dt, itm_nazev, sto_price, sto_count, sup_nazev
	FROM storage 
	LEFT JOIN items ON itm_id = sto_item
	LEFT JOIN suppliers ON sup_id = sto_supplier
	ORDER BY sto_insert_dt DESC, sto_id DESC
");
if (sql_count($res)){
	print '<div class="blok_div">';
	print '<table class="blok_table">';
	print '<thead>';
	print '<tr>';
	print '<th>Datum</th>';
	print '<th>Zboží</th>';
	print '<th>Dodavatel</th>';
	print '<th>Cena</th>';
	print '<th>Počet</th>';
	print '</tr>';
	print '</thead>';
	print '<tbody>';
	
	while ($row = sql_obj($res)) {		
		print '<tr>';
		print '<td>'. date_out($row->sto_insert_dt) .'</td>';
		print '<td>'. $row->itm_nazev .'</td>';
		print '<td>'. $row->sup_nazev .'</td>';
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