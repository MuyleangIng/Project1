<?php
    session_start();
    function checkLogin(){
        if(!isset($_SESSION['userid'])){
            
            header("location: phploginsystem/login.php");
            exit(0);
        }
    }