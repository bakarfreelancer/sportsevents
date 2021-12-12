<?php
include('../config/db-connect.php'); 
include('../config/functions.php');
    if(isset($_POST['addItem'])){
        if(empty($_POST['playerNicAdd']) || empty($_POST['sportsItemAdd'])){
            $_SESSION['addItemError'] = "Please fill all the required fields.";
            header('location: ../../sportsItems.php');
        }else{

            // This block will execute and if an error occured the controle will goes to catch block
            try{
                $sql = "INSERT INTO item (PNic, SItemName) VALUES (:playerId, :itemname)" ;
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    'playerId' => $_POST['playerNicAdd'],
                    'itemname' => $_POST['sportsItemAdd']
                ));
                $_SESSION['addItemSuccess'] = "Item added successfully.";
                header('location: ../../sportsItems.php');
            }
            catch(PDOException $e){
                $_SESSION['addItemError'] = $e->getMessage();
                header('location: ../../sportsItems.php');
            }
        }
    }
