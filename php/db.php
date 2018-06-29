<?php
$connection = mysql_connect("localhost","root1", "1234");
$db = mysql_select_db("photo_servise");
mysql_set_charset("utf8");


if (!$connection || !$db)
{
	exit (mysql_error());
}
?>