<?php
include('../config/db-connect.php'); 
include('../config/functions.php');
    if(isset($_POST['addGame'])){
        if(empty($_POST['gameName'])){
            $_SESSION['addGameError'] = "Game name is required for adding new game.";
            header('location: ../../games.php');
        }else if(empty($_POST['gameDate'])){
            $_SESSION['addGameError'] = "Game date is required for adding new game.";
            header('location: ../../games.php');
        }else if(empty($_POST['gameVenue'])){
            $_SESSION['addGameError'] = "Game venue is required for adding new game.";
            header('location: ../../games.php');
        }
        $sql = 'INSERT INTO game(GName, GDate, GVenue) VALUES(:Gname, :Gdate ,:Gvenue )';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'Gname'     => $_POST['gameName'],
            'Gdate'     => $_POST['gameDate'], 
            'Gvenue'    => $_POST['gameVenue']
        ]);

        $_SESSION['addGameSuccess'] = "Game added successfully.";
        header('location: ../../games.php');
    }
