<?php
include('../config/db-connect.php');
include('../config/functions.php');
if(isset($_GET['id'])){
    try{
    $sql = 'DELETE FROM player WHERE PNic = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);

    // THIS WILL SHOW SUCCESS MESSAGE IF PLAYER IS DELETED
    $_SESSION['addPlayerSuccess'] = "Player deleted successfully.";
    }
    catch(PDOException $e){
        // THIS WILL SHOW ERROR MESSAGE IF PLAYER IS NOT DELETED
        $_SESSION['addPlayerError'] = $e->getMessage();
    }
} 
header('location: ../../players.php');