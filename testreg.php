<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
  
if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
  
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

	$db = mysql_connect ("localhost","root1", "1234");
    mysql_select_db ("photo_servise",$db); 
 
	$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); 
    
	$myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    
    if ($myrow['password']==$password) {
    
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
	$_SESSION['bal']=$myrow['bal'];
    echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a> <a href='entry.php'>Вернуться</a>";
    }
	else {


    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
    ?>