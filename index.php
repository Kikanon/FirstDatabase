<!DOCTYPE html>
<html>

<head>
	<title>Database</title>
</head>

<body>
<?php
session_start();
if($_SESSION["usertype"] == "undefined"){
	$_SESSION["usertype"] == "0";
}
if($_SESSION["usertype"] == "1"){
    include "logedinheader.php";
}
?>

<h1>Stran, ki hrani in izpise quote.</h1><hr>

<?php
//reorganizirana koda
include "db_connect.php";
//include "echo_all.php";

?>

<h3>Iskanje po bazi.</h3>

<form action="search.php">
	<input type="text" name="keyword1" placeholder="Vnesi besedo" required="true" autofocus="true"><br>
	<input type="submit">
</form>

<hr>

<?php

//include "search.php";
//include "insert.php";
$mysqli->close();

?>

<h3>Vnos novih quotov.</h3>  
        
<form action="insert.php">
	<input type="text" name="attrib1" placeholder="Avtor" required="true"><br>
	<input type="text" name="attrib2" placeholder="Quote" required="true" autocomplete="off"><br>
	<input type="submit">
</form>

<hr>

<form action="echo_all.php">
	<input type="submit" value="Izpisi vse">
</form>

<hr>

<form action="add_user.php">
	<input type="submit" value="Sign up">
</form>

<hr>

<form action="login.php" method="post">
	Uporabnisko ime: <br><input type="text" name="uname" placeholder="User" required="true"><br>
	Geslo:           <br><input type="password" name="upass" placeholder="*******" required="true"><br>
	<input type="submit" value="Sign in">
</form>

</body>

</html>