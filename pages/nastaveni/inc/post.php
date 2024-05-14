<?php
if (g_post('reset')) {
	sql("TRUNCATE TABLE account");
	sql("INSERT INTO account SET acc_id = 1");
	sql("TRUNCATE TABLE bill_items");
	sql("TRUNCATE TABLE bills");
	sql("TRUNCATE TABLE customers");
	sql("TRUNCATE TABLE items");
	sql("TRUNCATE TABLE storage");
	sql("TRUNCATE TABLE storage_items");
	sql("TRUNCATE TABLE suppliers");
	
	Location();
}
?>