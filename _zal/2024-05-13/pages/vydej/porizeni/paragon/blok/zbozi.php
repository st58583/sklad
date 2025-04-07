<?php
$res = sql("SELECT itm_nazev, itm_kod, bii_count, bii_tax, bii_price
	FROM bill_items 
	LEFT JOIN items ON itm_id = bii_item 
	LEFT JOIN bills ON bil_id = bii_bill
	WHERE bii_bill = '". data('id') ."' AND bil_type = 'P'
	ORDER BY bii_id ASC 
");
if (sql_count($res)){
	$suma = 0;
	
	print '<div class="blok_div" id="blok_zbozi">';
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
		$suma += $row->bii_price * $row->bii_count;
		
		print '<tr>';
		print '<td>'. $row->itm_kod .'</td>';
		print '<td>'. $row->itm_nazev .'</td>';
		print '<td>'. $row->bii_count .'</td>';
		print '<td>'. money($row->bii_price) .'</td>';
		print '</tr>';
	}
	
	print '</tbody>';
	print '<tfoot>';
	print '<tr>';
	print '<td colspan="3">Celkem</td>';
	print '<td colspan="1">'. money($suma) .'</td>';
	print '</tr>';
	print '</tfoot>';
	print '</table>';	
	print '</div>';
} else {
	print '<div id="blok_zbozi">';
	info('Na paragon '. data('id') .' dosud nebyla přidána žádná položka.');
	print '</div>';
}
?>