<?php
include('../config/db-connect.php'); 
include('../config/functions.php');
    if(isset($_POST['updatePlayer'])){
        if(empty($_POST['playerId']) || empty($_POST['playerName']) || empty($_POST['address']) || empty($_POST['playerContact']) || empty($_POST['pid'])){
            $_SESSION['addPlayerError'] = "Please fill all the required fields.";
            header('location: ../../players.php');
        }else{

            // This block will execute and if an error occured the controle will goes to catch block
            try{
                $sql = "UPDATE player SET PNic = :playerId, PName = :playerName, PAddress = :address, PContact = :playerContact WHERE PNic = :pid";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    'playerId' => $_POST['playerId'],
                    'playerName' => $_POST['playerName'],
                    'address' => $_POST['address'],
                    'playerContact' => $_POST['playerContact'],
                    'pid' => $_POST['pid']
                ));
                $_SESSION['addPlayerSuccess'] = "Player added successfully.";
                header('location: ../../players.php');
            }
            catch(PDOException $e){
                $_SESSION['addPlayerError'] = $e->getMessage();
                header('location: ../../players.php');
            }
        }
    }
