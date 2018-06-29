<?php
      session_start();
    ?>
    <html>
	<?php
 include ('php/HACTPOUKU.php'); ?>
    <head>
    <title>Сервис для работы с фотографиями</title>
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
  
    <form action="testreg.php" method="post">

     <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>


    
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

    
    <p>
    <input type="submit" name="submit" value="Войти">

    <br>
 <a href="reg.php">Зарегистрироваться</a> 
    </p></form>
    <br>
    <?php
     if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {

    echo "Вы вошли на сайт, как ".$_SESSION['login']." У вас ".$_SESSION['bal']." баллов <br><a  href='index.php'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
    }
    ?>
	
	
	
	
	
    </body>
    </html>