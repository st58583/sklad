<?php
$res = sql("SELECT bil_id, bil_date, bil_due, bil_paid, bil_type
	FROM bills 
	ORDER BY bil_date DESC, bil_id DESC
");
if (sql_count($res)){
	print '<div class="blok_div">';
	print '<table class="blok_table">';
	print '<thead>';
	print '<tr>';
	print '<th>Datum</th>';
	print '<th>Číslo</th>';
	print '<th>Typ</th>';
	print '<th>Splatnost</th>';
	print '<th>Zaplaceno</th>';
	print '<th></th>';
	print '</tr>';
	print '</thead>';
	print '<tbody>';
	
	while ($row = sql_obj($res)) {
		$res2 = sql("SELECT SUM(bii_price * bii_count) as suma FROM bill_items WHERE bii_bill = '". $row->bil_id ."'");
		$suma = ($row2 = sql_obj($res2)) ? $row2->suma : 0;
		
		print '<tr>';
		print '<td>'. date_out($row->bil_date) .'</td>';
		print '<td>'. $row->bil_id .'</td>';
		print '<td>'. $typ_arr[$row->bil_type] .'</td>';
		print '<td>'. date_out($row->bil_date) .'</td>';
		print '<td>'. ($row->bil_paid != '0000-00-00' ? 'Ano' : 'Ne') .'</td>';
		print '<td>'. '<a href="./vydej/porizeni/'. $typ_page_arr[$row->bil_type] .'/'. $row->bil_id .'"><img src="./img/detail.svg" alt="Detail" title="Detail" class="svg_icon" /></a>' .' '. '<a href="./vydej/porizeni/storno/'. $row->bil_id .'"><img src="./img/storno.svg" alt="Storno" title="Storno" class="svg_icon" /></a>'.' '. '<a href="./vydej/porizeni/zaplaceno/'. $row->bil_id .'"><img src="./img/paid.svg" alt="Zaplaceno" title="Zaplaceno" class="svg_icon" /></a>' .'</td>';
		print '</tr>';
	}
	
	print '</tbody>';
	print '</table>';
	print '</div>';
} else {
	info("Dosud nebyla přijata žádná položka");
}
?>