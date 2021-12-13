<?php
include('../config/db-connect.php'); 
include('../config/functions.php');
    if(isset($_POST['addAward'])){
        if(empty($_POST['playerNic']) || empty($_POST['GId']) || empty($_POST['awardName'])){
            $_SESSION['addAwardError'] = "Please fill all the required fields.";
            header('location: ../../awards.php');
        }else{

            // This block will execute and if an error occured the controle will goes to catch block
            try{
                $sql = "INSERT INTO award (PNic, GId, AwardName) VALUES (:playerNic, :GId, :awardName)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':playerNic' => $_POST['playerNic'],
                    ':GId' => $_POST['GId'],
                    ':awardName' => $_POST['awardName']
                ));
                $_SESSION['addAwardSuccess'] = "Award added successfully.";
                header('location: ../../awards.php');
            }
            catch(PDOException $e){
                $_SESSION['addAwardError'] = $e->getMessage();
                header('location: ../../awards.php');
            }
        }
    }
