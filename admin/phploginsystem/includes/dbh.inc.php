<?php

$servername = "localhost";
$dBUsername = "root";
$dbpassword = "";
$dbname = "phploginsystem00";

$conn = mysqli_connect($servername, $dBUsername, $dbpassword, $dbname);

if(!$conn){
    die("Connection fail: " . mysqli_connect_error());
}