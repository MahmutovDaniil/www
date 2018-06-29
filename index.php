
<html>

<?php

require_once('Connections/db.php'); 
mysql_select_db($database_news, $db); 
$query_news = "SELECT * FROM news ORDER BY date DESC";
$news = mysql_query($query_news, $db) or die(mysql_error());
$row_news = mysql_fetch_assoc($news);
$totalRows_news = mysql_num_rows($news);
?>

<?php
 include ('php/HACTPOUKU.php'); ?>
<head>

<meta charset ='uft-8'>
<title> Сервис для работы с фотографиями</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.pack.js" type="text/javascript"></script>
<script src="jquery.cookies.js" type="text/javascript"></script>
<script src="js/golos.js" type="text/javascript"></script>
</head>
<body>
<p align="center"><font size="5" color="black"><i><strong>Сервис для работы с фотографиями</strong><i></font></p>
<ul class="glossymenu">
 <div class="glossymenu">
     <ul>
<?php  
	include ('php/GOPU3OHTAJIb.php');
?>	
     </ul>
     </div>
  </div>

    <div style="margin-left:20px;">
	
        <?php if ($totalRows_news != 0) { do { ?>
<p><Span> <font size="3" color="black"><?php echo $row_news['title']; ?></Span></p>
<h1><p align="center"><img src="i\<?php echo $row_news['image']?>"   alt="Image" height= "n1" width= "n2" </p></h1>
<p><Span> <font size="3" color="black"><?php echo $row_news['text']; ?></Span></p>
<p><Span> <font size="3" color="red"><?php echo $row_news['autor']?></Span></p>
        
        <?php $idArt = $row_news['id'];
		      $q = "SELECT * FROM news WHERE id='$idArt'";
			  $r = mysql_query($q);
			  if (mysql_num_rows($r)>0) {
	              while($row = mysql_fetch_assoc($r)){
		              $net_vote = $row['votes_up']; ?>
        <div>
            <span class="votes_count" id="votes_count<?php echo $row['id']; ?>">
			    <?php echo "<span style='color:#666;'>Понравился материал</span> ".$net_vote; ?>
            </span>
            <span class="vote_buttons" id="vote_buttons<?php echo $row['id']; ?>">
                <a href="javascript:;" class="vote_up" id="<?php echo $row['id']; ?>">Vote Up!</a>
            </span>
        </div>
		<?php }} ?>
        
        <br><br>
        <?php } while ($row_news = mysql_fetch_assoc($news)); } ?>
    </div>
</body>

</html>