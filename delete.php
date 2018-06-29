<?php
   session_start();
    ?>
<?php

include("php/db.php");

$id = $_GET['id'];

$_SESSION['bal']=$_SESSION['bal']-2;


mysql_query(" DELETE FROM news WHERE id='$id' ");

$autor =$row['autor'];

mysql_close();

include ('php/db.php');
mysql_query (" UPDATE users SET `bal` = `bal` - 2
WHERE login='$autor'");
mysql_close();



echo "Удалено!";

?>