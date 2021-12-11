<?php
session_start();
if(isset($_GET['logout']) && $_GET['logout'] == '1'){
    $_SESSION['loggedIn'] = false;
    unset($_SESSION['loggedIn']);
    header('location: /sportsevents/login.php');
}else{
    header("location: /sportsevents/index.php");
}