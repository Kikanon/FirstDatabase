<?php
include "db_connect.php";
//preveri povezavo
if($mysqli->connect_errno){
	echo "Ni se moglo povezat do baze: ".$mysqli->connect_errno." Napaka: ". $mysqli->connect_error;
}

echo $mysqli->host_info."<br>";
//z sql stavkom poisce entitete
$sql = "SELECT quoteID,Author,Text FROM quotes";
$result = $mysqli->query($sql);

if($result->num_rows > 0){
//izpise vse
	while($row = $result->fetch_assoc()){
		echo "ID: ".$row['quoteID'].", Autor: ".$row['Author'].", Text: ".$row['Text']."<br>";
	}

}
else{//ce nic ne najde
	echo "0 results";
}

?>
<a href="index.php">Return no main page</a>