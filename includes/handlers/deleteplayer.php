<?php
include('../config/db-connect.php');
include('../config/functions.php');
if(isset($_GET['id'])){
    $sql = 'DELETE FROM player WHERE PNic = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);

    // THIS WILL SHOW SUCCESS MESSAGE IF PLAYER IS DELETED
    $_SESSION['addPlayerSuccess'] = "Player deleted successfully.";
} else{
    // $_SESSION['addPlayerSuccess'] = "Game deleted successfully.";
}
header('location: ../../players.php');