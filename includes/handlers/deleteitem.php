<?php
include('../config/db-connect.php');
include('../config/functions.php');
if(isset($_GET['id'])){
    $sql = 'DELETE FROM item WHERE PNic = :id AND SItemName = :item';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id'], 'item' => $_GET['item']]);

    // THIS WILL SHOW SUCCESS MESSAGE IF ITEM IS DELETED
    $_SESSION['addItemSuccess'] = "Item deleted successfully.";
} else {
    // THIS WILL SHOW ERROR MESSAGE IF ITEM IS NOT DELETED
    $_SESSION['addItemError'] = "Item not deleted.";
}
header('location: ../../sportsItems.php');