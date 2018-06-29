<?php
    session_start();
    ?>
<html>
<?php
 include ('php/HACTPOUKU.php'); ?>
<head>


<meta charset ='uft-8'>
<title> Система ведения карточек сотрудников</title>

</head>
<body>
<p align="center"><font size="5" color="black"><i><strong>Сервис для работы с фотографиями</strong><i></font></p>
<ul class="glossymenu">
 <div class="glossymenu">
     <ul>
<?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
	include ('php/GOPU3OHTAJIb2.php'); 
    }
    else
    {
	include ('php/GOPU3OHTAJIb.php');
    }
    ?>
     </ul>
     </div>
  </div>
  
<form method="post" action="create.php">

Картинка к примеру 001.jpg<br />
<input type="text" name="image"  /><br />

Название<br />
<input type="text" name="title"  /><br />

Описание<br />
<input type="text" name="text"  /><br />
<br /><br />

<input type="submit" name="create" value="Добавить"  />
</form>

<?php

include ('php/db.php');


if(isset($_POST['create']))
{
$image = $_POST['image'];
$title = $_POST['title'];
$text = $_POST['text'];
$autor = $_SESSION['login'];


mysql_query ("

INSERT INTO news(image, title, text, autor)
VALUES ('$image', '$title', '$text', '$autor')
");

mysql_close();

include ('php/db.php');
mysql_query (" UPDATE users SET `bal` = `bal` + 2
WHERE login='$autor'");
mysql_close();

echo "Запись добавлена";
}
?>

</body>
</html>