<?php
if (g_arg(0) == "storno" && g_arg(1)) {
	$res = sql("SELECT bii_item FROM bill_items WHERE bii_bill = '". g_arg(1) ."'");
	while ($row = sql_obj($res)) sql("UPDATE storage_items SET sti_available = 'Y' WHERE sti_item = '". $row->bii_item ."' AND sti_available = 'N'");
	sql("UPDATE bill_items SET bii_bill = '0' WHERE bii_bill = '". g_arg(1) ."'");
	sql("DELETE FROM bills WHERE bil_id = '". g_arg(1) ."'");
	
	Location('../');
}

if (g_arg(0) == "zaplaceno" && g_arg(1)) {
	sql("UPDATE bills SET bil_paid = NOW() WHERE bil_id = '". g_arg(1) ."'");
}
?>