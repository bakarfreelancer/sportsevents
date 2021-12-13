<?php 
include('includes/config/db-connect.php');
include('includes/config/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="assets/bootstrap/icons/font/bootstrap-icons.css"
    />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Sports Events</title>
  </head>
  <body style="height: 100vh">
    <!-- HEADER STARTS -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand fs-1" href="index.php">Sports Events</a>

        <?php if(strpos($_SERVER['SCRIPT_NAME'], 'games')) :?>
            <!-- Add Game -->
            <button
              type="button"
              class="btn btn-primary ms-auto me-3"
              data-bs-toggle="modal"
              data-bs-target="#addPlayerModal"
            >
              Add Game
            </button>
        <?php endif ?>


        <?php if(strpos($_SERVER['SCRIPT_NAME'], 'awards')) :?>
        <!-- Add Award -->
        <button
          type="button"
          class="btn btn-primary ms-auto me-3"
          data-bs-toggle="modal"
          data-bs-target="#addAwardModal"
        >
          Add Award
        </button>
        <?php endif ?>
        

        <?php if(strpos($_SERVER['SCRIPT_NAME'], 'players')) :?>
        <!-- Add Player -->
        <button
          type="button"
          class="btn btn-primary ms-auto me-3"
          data-bs-toggle="modal"
          data-bs-target="#addPlayerModal"
        >
          Add Player
        </button>
        <?php endif ?>

        <?php if(strpos($_SERVER['SCRIPT_NAME'], 'sportsItems')) :?>
        <!-- Add Item -->
        <button
          type="button"
          class="btn btn-primary ms-auto me-3"
          data-bs-toggle="modal"
          data-bs-target="#addItemModal"
        >
          Issue Item
        </button>
        <?php endif ?>
        
        <?php if(strpos($_SERVER['SCRIPT_NAME'], 'playergms')) :?>
        <!-- Add Item -->
        <button
          type="button"
          class="btn btn-primary ms-auto me-3"
          data-bs-toggle="modal"
          data-bs-target="#addPlayerGmModal"
        >
          Assign Game
        </button>
        <?php endif ?>

        <!-- Button trigger logout modal -->
        <i
          class="bi bi-list fs-1"
          type="button"
          data-bs-toggle="modal"
          data-bs-target="#mainMenuModal"
        ></i>
      </div>
    </nav>
    <!-- HEADER ENDS -->

    <!-- MENU MODAL START -->
    <div
      class="modal fade"
      id="mainMenuModal"
      tabindex="-1"
      aria-labelledby="mainMenuModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mainMenuModalLabel">Menu</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center">
            <a
              href="index.php"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
            >
              Dashboard</a
            >
            <a
              href="games.php"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
            >
              Games</a
            >
            <a
              href="players.php"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
              >Players</a
            >
            <a
              href="sportsItems.php"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
              >Sports Items</a
            >
            <a
              href="awards.php"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
              >Awards</a
            >
            <a href="#" class="d-block fs-4 text-decoration-none text-dark mb-3"
            data-bs-toggle="modal"
          data-bs-target="#logoutModal"
              >Logout</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- MENU MODAL END -->

       <!-- LOGOUT MODAL START -->
       <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      aria-labelledby="logoutModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">Are you sure to logout?</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              No
            </button>
            <a href="includes/handlers/logout.php?logout=1" type="button" class="btn btn-danger">Yes</a>
          </div>
        </div>
      </div>
    </div>
    <!-- LOGOUT MODAL END -->