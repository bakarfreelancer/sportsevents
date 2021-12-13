<?php
include('../config/db-connect.php');
include('../config/functions.php');
if(isset($_GET['id'])){
    try{     
        $sql = 'DELETE FROM game WHERE GId = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_GET['id']]);
    
        $_SESSION['deleteGameSuccess'] = "Game deleted successfully.";
    }
    catch(PDOException $e){
        $_SESSION['deleteGameError'] = $e->getMessage();
    }
} else{
    $_SESSION['deleteGameError'] = "Game not deleted.";
}
header('location: ../../games.php');