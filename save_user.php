<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
	
 if (empty($login) or empty($password) or empty($email))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
	$email = stripslashes($email);
    $email = htmlspecialchars($email);
	
	
  $login = trim($login);
    $password = trim($password);
	$email = trim($email);
 
    $db = mysql_connect ("localhost","root1", "1234");
    mysql_select_db ("photo_servise",$db);
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }

    $result2 = mysql_query ("INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");
    
	$subject = "Регистрация";
	$message = "Возрадуйтесь, ибо вы зарегистрированы! \nВаш логин: ".$login."\n  \nВаш пароль: ".$password."\n ";
	mail($email, $subject, $message, "Content-type:text/plain; Charset=windows-1251\r\n");
	
   
    if ($result2=='TRUE')  
	
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>