<?php
include "db_connect.php";

$attrib1 = $_GET['attrib1'];
$attrib2 = $_GET['attrib2'];

echo "<h1>Poskusamo dodati quote...</h1>";

$sql = "INSERT INTO quotes (quoteID, Author, Text) VALUES (NULL, '$attrib1', '$attrib2');";
$result = $mysqli->query($sql);

include "echo_all.php";
?>

<a href="index.php">Return no main page</a>