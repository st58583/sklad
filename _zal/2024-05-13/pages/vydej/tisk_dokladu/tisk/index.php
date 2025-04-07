<?php
$res = sql("SELECT bil_type FROM bills WHERE bil_id = '". g_arg(0) ."'");
if (!sql_count($res)) Location('../');

if ($row = sql_obj($res)) {
	if ($row->bil_type == 'P') include('./pages/vydej/tisk_dokladu/tisk/inc/paragon.php');
	elseif ($row->bil_type == 'F') include('./pages/vydej/tisk_dokladu/tisk/inc/faktura.php');
}

exit;
?>