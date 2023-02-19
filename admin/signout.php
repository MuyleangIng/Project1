<?php
session_start();
session_unset();
session_destroy();

if (isset($_SESSION['userid'])){
    
    header("location: phploginsystem/login.php");
    exit;
}
else{
    header("location: phploginsystem/login.php");
    exit;
}