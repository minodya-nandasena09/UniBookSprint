<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "rer_manager";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong");
}
?>