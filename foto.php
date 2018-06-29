<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<html>
<?php
 include ('php/HACTPOUKU.php'); ?>
<head>


<meta charset ='uft-8'>
<title> Сервис для работы с фотографиями</title>

</head>
<body>
<p align="center"><font size="5" color="black"><i><strong>Система ведения карточек сотрудников</strong><i></font></p>
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
  
<form enctype="multipart/form-data" method="post">
<input name="picture" type="file" />
<input type="submit" value="Загрузить" />
</form>




<?php


$path = 'i/';
$tmp_path = 'tmp/';

$types = array('image/gif', 'image/png', 'image/jpeg');

$size = 1024000;


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

 if (!in_array($_FILES['picture']['type'], $types))
  die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');


 if ($_FILES['picture']['size'] > $size)
  die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');


 if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
  echo 'Что-то пошло не так';
 else
 echo 'Загрузка удачна <a href="' . $path . $_FILES['picture']['name'] . '">Посмотреть</a> ' ;
}

?>

</body>
</html>