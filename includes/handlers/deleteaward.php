<?php
include('../config/db-connect.php');
include('../config/functions.php');
if(isset($_GET['GId']) && isset($_GET['awardName'])){
    $sql = 'DELETE FROM award WHERE GId = :GId AND AwardName = :awardName';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['GId' => $_GET['GId'], 'awardName' => $_GET['awardName']]);

    // THIS WILL SHOW SUCCESS MESSAGE IF ITEM IS DELETED
    $_SESSION['addAwardSuccess'] = "Award deleted successfully.";
} else {
    // THIS WILL SHOW ERROR MESSAGE IF ITEM IS NOT DELETED
    $_SESSION['addAwardError'] = "Award not deleted.";
}
header('location: ../../awards.php');