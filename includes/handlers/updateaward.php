<?php
include('../config/db-connect.php'); 
include('../config/functions.php');
    if(isset($_POST['updateAward'])){
        if(empty($_POST['oldGId']) || empty($_POST['oldAwardName']) || empty($_POST['GId']) || empty($_POST['playerNic']) || empty($_POST['awardName'])){
            $_SESSION['addAwardError'] = "Please fill all the required fields.";
            header('location: ../../awards.php');
        }else{

            // This block will execute and if an error occured the controle will goes to catch block
            try{
                $sql = "UPDATE award SET GId = :GId, PNic = :playerNic, AwardName = :awardName WHERE GId = :oldGId AND AwardName = :oldAwardName";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':GId' => $_POST['GId'],
                    ':playerNic' => $_POST['playerNic'],
                    ':awardName' => $_POST['awardName'],
                    ':oldGId' => $_POST['oldGId'],
                    ':oldAwardName' => $_POST['oldAwardName']
                ));
                $_SESSION['addAwardSuccess'] = "Award updated successfully.";
                header('location: ../../awards.php');
            }
            catch(PDOException $e){
                $_SESSION['addAwardError'] = $e->getMessage();
                header('location: ../../awards.php');
            }
        }
    }
