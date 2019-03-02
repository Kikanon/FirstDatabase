<?php
session_start();


if(!isset($_SESSION['usertype'])){
    echo "Prvic";
    $_SESSION["usertype"] = "0";
}


?>