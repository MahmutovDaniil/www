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
  
  
  
<h2>Регистрация</h2>
    <form action="save_user.php" method="post">
    
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="50">
    </p>

<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="50">
    </p>

<p>
    <label>Ваш email:<br></label>
    <input name="email" type="email" size="15" maxlength="50">
    </p>


<p>
    <input type="submit" name="submit" value="Зарегистрироваться">

</p></form>





</body>
</html>