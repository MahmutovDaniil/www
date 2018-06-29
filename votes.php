
<?php 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    include("config.php");
    $day = date("Y-m-d H:i:s");
    mysql_query ("DELETE FROM vote_ip WHERE date_resp < '$day'");

    function getAllVotes($id) {
	    $votes = array();
	    $q = "SELECT * FROM news WHERE id='$id'";
	    $r = mysql_query($q);
		if(mysql_num_rows($r)==1) { 
		$row = mysql_fetch_assoc($r);
		$votes[0] = $row['votes_up'];    
		}
	    return $votes;
	}

    function getEffectiveVotes($id) {
	    $votes = getAllVotes($id);
	    $effectiveVote = $votes[0];
	    return $effectiveVote;
	}

    $id = $_POST['id'];
	$yra = $_POST['id'];
    $action = $_POST['action'];
    $cur_votes = getAllVotes($id);
	
    $ip = $_SERVER['REMOTE_ADDR']; 
    $r = mysql_query("SELECT * FROM vote_ip WHERE id_resp='$id' AND ip='$ip'"); 
    if(mysql_num_rows($r)==1) {
        echo "<span style='color:#666;'>Понравился материал</span> ".getEffectiveVotes($id)."<span style='color:#E57057;'> 
		      Вы уже оставили свой голос!</span>"; // 
        exit;
    }

    if($action=='vote_up') {
	    $votes_up = $cur_votes[0]+1;		
	    $q = "UPDATE news SET votes_up='$votes_up' WHERE id='$id'";
    }
	
    $r = mysql_query($q);
    if($r) {
	    $effectiveVote = getEffectiveVotes($id);
	    echo "<span style='color:#666;'>Понравился материал</span> ".$effectiveVote." <span style='color:#E57057;'>Спасибо за Ваш голос!</span>";
		$date_resp = date("Y-m-d",time()+ 1*24*60*60); 
	    mysql_query("INSERT INTO vote_ip (id_resp, ip, date_resp) VALUES ('$id','$ip','$date_resp')");
		
		
include ('php/db.php');
$result = mysql_query (" SELECT id, title, image, text, autor FROM news
WHERE id='$yra'");
mysql_close();
while($row = mysql_fetch_assoc($result))
{
$autor =$row['autor'];
}
include ('php/db.php');
mysql_query (" UPDATE users SET `bal` = `bal` + 1
WHERE login='$autor'");
mysql_close();
	    
	    
	} 
    else if(!$r) {
	    echo "Ошибка!";
	}
}

else exit("Посторонним вход воспрещен");
?>
