<html>
<?php
 include ('php/HACTPOUKU.php'); ?>
<head>


<meta charset ='uft-8'>
<title>Сервис для работы с фотографиями</title>

</head>
<body>
<p align="center"><font size="5" color="black"><i><strong>Система ведения карточек сотрудников</strong><i></font></p>
<ul class="glossymenu">
 <div class="glossymenu">
     <ul>
<?php
 include ('php/GOPU3OHTAJIb.php'); ?>
     </ul>
     </div>
  </div>
  


<?php

 include ('php/db.php');

 
 
$id = $_GET['id'];

$result = mysql_query (" SELECT title, image, text FROM news
 WHERE id='$id'   
");

$row = mysql_fetch_assoc($result);

if(isset($_POST['save']))
{

$title  = strip_tags(trim($_POST['title']));
$image = strip_tags(trim($_POST['image']));
$text = strip_tags(trim($_POST['text']));


mysql_query(" UPDATE news SET title = '$title', image = '$image', text = '$text' WHERE id='$id' ");

   mysql_close();
}
 
?>

<form method="post" action="update.php?id=<?php echo $id; ?>">

Фотография<br />
<input type="text" name="image" value="<?php echo $row['image']; ?>" /><br />

Название<br />
<input type="text" name="title" value="<?php echo $row['title']; ?>"  /><br />

Описание<br />
<input type="text" name="text" value="<?php echo $row['text']; ?>"  /><br />
<br /><br />

<input type="submit" name="save" value="Сохранить"  />
</form>



</body>
</html>