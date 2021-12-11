<?php
include('../config/db-connect.php');
if(isset($_GET['id'])){
    echo $_GET['id'];
    $sql = 'DELETE FROM game WHERE GId = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);

    $_SESSION['deleteGameSuccess'] = "Game deleted successfully.";
} else{
    $_SESSION['deleteGameError'] = "Game deleted successfully.";
}
header('location: ../../games.php');