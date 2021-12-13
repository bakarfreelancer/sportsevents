<?php
include('../config/db-connect.php'); 
include('../config/functions.php');
    if(isset($_POST['addPlayerGame'])){
        if(empty($_POST['playerNic']) || empty($_POST['GId'])){
            $_SESSION['addPlayerGmError'] = "Please fill all the required fields.";
            header('location: ../../playergms.php?PNic='.$_POST['playerNic']);
        }else{

            // This block will execute and if an error occured the controle will goes to catch block
            try{
                $sql = "INSERT INTO playergame (PNic, GId) VALUES (:playerNic, :GId)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':playerNic' => $_POST['playerNic'],
                    ':GId' => $_POST['GId']
                ));
                $_SESSION['addPlayerGmSuccess'] = "Game added successfully.";
                header('location: ../../playergms.php?PNic='.$_POST["playerNic"]);
            }
            catch(PDOException $e){
                $_SESSION['addPlayerGmError'] = $e->getMessage();
                header('location: ../../playergms.php?PNic='.$_POST["playerNic"]);
            }
        }
    }
