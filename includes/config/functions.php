<?php
// session_start();
function userLoggedIn(){
    if(!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']){
        header('location: /sportsevents/login.php');
    }
}
userLoggedIn();