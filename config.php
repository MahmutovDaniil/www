<?php
$hostname = "localhost";
$db_username = "root1";
$db_password = "1234";

$link = mysql_connect($hostname, $db_username, $db_password) or die("Cannot connect to the database");
mysql_select_db("photo_servise") or die("Cannot select the database");
?>