<?php
include('../config/db-connect.php');
include('../config/functions.php');
if(isset($_GET['PNic']) && isset($_GET['GId'])){
    $sql = 'DELETE FROM playergame WHERE PNic = :PNic AND GId = :GId';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['PNic' => $_GET['PNic'], 'GId' => $_GET['GId']]);

    // THIS WILL SHOW SUCCESS MESSAGE IF ITEM IS DELETED
    $_SESSION['addPlayerGmSuccess'] = "Player deleted successfully.";
} else {
    // THIS WILL SHOW ERROR MESSAGE IF ITEM IS NOT DELETED
    $_SESSION['addPlayerGmError'] = "Player Game not deleted.";
}
header('location: ../../playergms.php?PNic='.$_GET['PNic']);