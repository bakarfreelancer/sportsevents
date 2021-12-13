<?php
include('../config/db-connect.php'); 
include('../config/functions.php');
    if(isset($_POST['updateItem'])){
        if(empty($_POST['oldPNIC']) || empty($_POST['oldItem']) || empty($_POST['playerNic']) || empty($_POST['sportsItem'])){
            $_SESSION['addItemError'] = "Please fill all the required fields.";
            header('location: ../../sportsItems.php');
        }else{

            // This block will execute and if an error occured the controle will goes to catch block
            try{
                $sql = "UPDATE item SET PNic = :playerId, SItemName = :itemName WHERE PNic = :oldPNIC AND SItemName = :oldItem";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':playerId' => $_POST['playerNic'],
                    ':itemName' => $_POST['sportsItem'],
                    ':oldPNIC' => $_POST['oldPNIC'],
                    ':oldItem' => $_POST['oldItem']
                ));
                $_SESSION['addItemSuccess'] = "Item updated successfully.";
                header('location: ../../sportsItems.php');
            }
            catch(PDOException $e){
                $_SESSION['addItemError'] = $e->getMessage();
                header('location: ../../sportsItems.php');
            }
        }
    }
