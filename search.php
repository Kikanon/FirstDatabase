<?php

include "db_connect.php";

//Poisce iskano besedo in izpise rezultate
$keyword = $_GET['keyword1'];
echo "Izpis iskanih stvari:<br>";
//z sql stavkom poisce entitete
$sql = "SELECT quoteID,Author,Text FROM quotes WHERE Text LIKE '%".$keyword."%'";
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