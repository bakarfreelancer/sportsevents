<?php include('includes/config/db-connect.php');
include('includes/config/functions.php');?>
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
        <a class="navbar-brand fs-1" href="./"
          >Sports Events Management System</a
        >

        <!-- Button trigger logout modal -->
        <i
          class="bi bi-box-arrow-right fs-1"
          type="button"
          data-bs-toggle="modal"
          data-bs-target="#logoutModal"
        ></i>
      </div>
    </nav>
    <!-- HEADER ENDS -->

    <!-- MAIN CONTENT STARTS -->
    <main class="container">
      <div
        class="
          row
          col-10 col-sm-9 col-md-6 col-lg-4
          mx-auto
          position-absolute
          top-50
          start-50
          translate-middle
        "
      >
        <div class="col-12">
          <a
            href="games.php"
            type="button"
            class="
              btn
              bg-gray
              w-100
              py-4
              m-2
              text-black text-decoration-none
              fs-2
            "
          >
            Games
          </a>
        </div>
        <div class="col-6">
          <a
            href="players.php"
            type="button"
            class="
              btn
              bg-gray
              py-4
              m-2
              w-100
              text-black text-decoration-none
              fs-2
            "
            >Players
          </a>
        </div>
        <div class="col-6">
          <a
            href="sportsItems.php"
            type="button"
            class="
              btn
              bg-gray
              py-4
              m-2
              w-100
              text-black text-decoration-none
              fs-2
            "
          >
            Items
          </a>
        </div>
        <div class="col-12">
          <a
            href="awards.php"
            type="button"
            class="
              btn
              bg-gray
              w-100
              py-4
              m-2
              text-black text-decoration-none
              fs-2
            "
            >Awards
          </a>
        </div>
      </div>
    </main>
    <!-- MAIN CONTENT ENDS -->

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

    <!-- BOOTSTAP JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
