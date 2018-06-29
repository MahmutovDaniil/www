<?php
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

<?php


include ('php/db.php');

$autor = $_SESSION['login'];
$result = mysql_query (" SELECT id, title, image, text, autor FROM news
WHERE autor='$autor' ORDER BY date DESC");

mysql_close();

while($row = mysql_fetch_assoc($result))
{?>

<p><Span> <font size="3" color="black"><?php echo $row['title']?></Span></p>
<h1><p align="center"><img src="i\<?php echo $row['image']?>"   alt="Image" height= "n1" width= "n2" </p></h1>
<p><Span> <font size="3" color="black"><?php echo $row['text']?></Span></p>
<p><Span> <font size="3" color="red"><?php echo $row['autor']?></Span></p>
<a href="update.php?id=<?php echo $row['id']?>">Редактировать</a><br />
<a href="delete.php?id=<?php echo $row['id']?>">Удалить</a>


<?php }?>



</body>
</html>