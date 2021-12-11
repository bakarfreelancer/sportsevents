<?php
include('../config/db-connect.php');
include('../config/functions.php');

// CHECK IF FORM IS SUBMITTED
if(isset($_POST['updateGame'])){

    // CHECK IF ANY FIELD IS EMPTY
    if(empty($_POST['gameName']) || empty($_POST['gameId']) || empty($_POST['gameDate']) || empty($_POST['gameVenue'])){
        $_SESSION['addGameError'] = 'Please fill all the required fields';
        header('location: ../../games.php');
    }

    $sql = 'UPDATE game SET GName = :gname, GDate = :gdate, GVenue = :gvenue WHERE GId = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        [
            'gname'     => $_POST['gameName'],
            'gdate'     => $_POST['gameDate'],
            'gvenue'    => $_POST['gameVenue'],
            'id'        => $_POST['gameId']
        ]
    );
    $_SESSION['addGameSuccess'] = 'Game updated successfully.';
    header('location: /sportsevents/games.php');
}