<?php

include "db_connect.php";
date_default_timezone_set("Europe/Ljubljana");

$username = $_POST['uname'];
$userpass = $_POST['upass'];
$visit = date("m/d/Y, H:i:s");

$sql = "SELECT UserName FROM users WHERE UserName LIKE '".$username."'";
$obstaja = $mysqli->query($sql);
if($obstaja->num_rows > 0){
	$sql = "SELECT UserPass FROM users WHERE UserName LIKE '".$username."'";
    $smokiji = $mysqli->query($sql);
	$row = mysqli_fetch_array($smokiji);
    $cips = $row['UserPass'];  
	if($userpass == $cips){
		echo "<h1>Vpisujem...</h1><br>"; //Vpisuje
		$sql = "UPDATE `users` SET  UserLastVisit =  '".$visit."' WHERE  UserName = '".$username."';"; //Posodobi cas
		$spydate = $mysqli->query($sql);
		//sleep(2);
		//include "profile.php";
	}
	else{
		echo "<h1>Napacno geslo!</h1><br>";
	}
}
else{
	echo "<h1>Uporabnik ne obstaja.</h1><br>";
}
$sql = "SELECT UserName,UserPass FROM users WHERE UserName,UserPass LIKE '".$username."'";
$bad = $mysqli->query($sql);


?>
<a href="index.php" style="margin: 20px">Return no main page</a>