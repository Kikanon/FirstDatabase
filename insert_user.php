<?php

include "db_connect.php";
date_default_timezone_set("Europe/Ljubljana");

$username = $_POST['user_name'];
$userpass = $_POST['user_pass'];
$userpassc = $_POST['user_passc'];
$usermail = $_POST['user_mail'];
$visit = date("m/d/Y, H:i:s");  //mesec/dan/leto, ura:minuta:sekunde

if($userpass==$userpassc){  //Preveri da sta gesli enaki
	$find_at = strpos($usermail, '@');
    $find_dot = strpos($usermail, '.');
    if($find_at !== false && $find_dot !== false && $find_dot > $find_at ? true : false){  //Preveri pravilnost e maila
		$sql = "SELECT UserID FROM users WHERE UserName LIKE '".$username."'";
        $bad = $mysqli->query($sql);
		if($bad->num_rows < 1){  //Preveri ce je uporabnisko ime ze zasedeno
		    $sql = "SELECT UserID FROM users WHERE UserMail LIKE '".$usermail."'";
            $ebad = $mysqli->query($sql);
			if($ebad->num_rows < 1){   //Preveri ce je e mail ze zaseden
				$sql = "INSERT INTO users (UserID, UserName, UserPass, UserMail, UserType, UserLastVisit) VALUES (NULL, '$username', '$userpass', '$usermail', '1', '$visit');";
				$sucess = $mysqli->query($sql); 
				header('Location: index.php'); //preusmeri na glavno stran
			}
			else{
				echo "<h1>E-naslov je ze uporabljen.</h1><br>";
			}	
		}
		else{
		    echo "<h1>Uporabnik ze obstaja.</h1><br>";
			}
	}
	else{
		echo "<h1>E-naslov ni veljaven.</h1><br>";
	}
}
else{
	echo "<h1>Gesli se ne ujemata.</h1><br>";
}


/* echo $username."<br>";
echo $userpass."<br>";
echo $userpassc."<br>";                    Za testiranje
echo $usermail."<br>";
echo $visit."<br>"; */
?>
<a href="index.php" style="margin: 20px">Return no main page</a>