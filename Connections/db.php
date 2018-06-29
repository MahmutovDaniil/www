<?php
$db = mysql_connect("localhost", "root1", "1234");
mysql_select_db("photo_servise", $db);
mysql_query("SET character_set_results = 'utf8', 
			character_set_client = 'utf8', 
			character_set_connection = 'utf8',
			character_set_database = 'utf8', 
			character_set_server = 'utf8'", $db);
?>