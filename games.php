<?php 
include('./includes/components/header.php');
include('./includes/handlers/displaygames.php');

?>
<!-- MAIN CONTENT STARTS -->
    <main class="container">

      <!-- ADD GAME ERROR MESSAGE -->
        <?php 
        if(isset($_SESSION['addGameError'])):?>
          <div class="alert alert-warning alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Error!</strong> 
            <?php echo $_SESSION['addGameError']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addGameError']);
          endif
          ?>
          
          <!-- ADD GAME SUCCESS MESSAGE -->
          <?php 
        if(isset($_SESSION['addGameSuccess'])):?>
          <div class="alert alert-success alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Success!</strong> 
            <?php echo $_SESSION['addGameSuccess']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addGameSuccess']);
          endif
          ?>

          <!-- DELETE GAME SUCCESS MESSAGE -->
          <?php 
        if(isset($_SESSION['deleteGameSuccess'])):?>
          <div class="alert alert-success alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Success!</strong> 
            <?php echo $_SESSION['deleteGameSuccess']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['deleteGameSuccess']);
          endif
          ?>

          <!-- DELETE GAME ERROR MESSAGE -->
        <?php 
        if(isset($_SESSION['deleteGameError'])):?>
          <div class="alert alert-warning alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Error!</strong> 
            <?php echo $_SESSION['deleteGameError']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['deleteGameError']);
          endif
          ?>
          
        <h2 class="my-4 text-decoration-underline">Games</h2>
        <table class="table table-striped mt-4" id="gamesTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Game Name</th>
              <th scope="col">Game Date</th>
              <th scope="col">Game Venue</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <!-- DISPLAY ALL GAMES -->
            <?php foreach($games as $game):?>
              <tr>
                <th scope="row"><?php echo $game->GId?></th>
                <td><?php echo $game->GName?></td>
                <td><?php echo $game->GDate?></td>
                <td><?php echo $game->GVenue?></td>
                <td>
                <a
                  class="btn btn-success editGame"
                  data-bs-toggle="modal"
                  data-bs-target="#editPlayerModal"
                  >Edit</a
                >
              </td>
              </tr>
            <?php endforeach?>
          </tbody>
        </table>
    </main>
    <!-- MAIN CONTENT ENDS -->

    <!-- ADD GAME MODAL START -->
    <div
      class="modal fade"
      id="addPlayerModal"
      tabindex="-1"
      aria-labelledby="addPlayerModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addPlayerModalLabel">Add New Game</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- ADD GAME FORM START -->
            <form class="row g-3 needs-validation" action="includes/handlers/addgame.php" method="POST" novalidate>
              <div class="col-12">
                <label for="gameName" class="form-label">Game name</label>
                <input
                  type="text"
                  class="form-control"
                  id="gameName"
                  name="gameName"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="gameDate" class="form-label">Game Time</label>
                <input
                  type="datetime-local"
                  class="form-control"
                  id="gameDate"
                  name="gameDate"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="gameVenue" class="form-label">Game venue</label>
                <input
                  type="text"
                  class="form-control"
                  id="gameVenue"
                  name="gameVenue"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="addGame" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- ADD GAME FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- ADD GAME MODAL END -->

    <!-- EDIT GAME MODAL START -->
    <div
      class="modal fade"
      id="editPlayerModal"
      tabindex="-1"
      aria-labelledby="editPlayerModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editPlayerModalLabel">Edit Game</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- EDIT GAME FORM START -->
            <form class="row g-3 needs-validation" action="includes/handlers/updategame.php" method="POST" novalidate>
              <input type="text" name="gameId" class="gameId d-none" />
              <div class="col-12">
                <label for="gameName" class="form-label">Game name</label>
                <input
                  type="text"
                  class="form-control gameName"
                  id="gameName"
                  name="gameName"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="gameDate" class="form-label">Game Time</label>
                <input
                  type="datetime-local"
                  class="form-control gameDate"
                  id="gameDate"
                  name="gameDate"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="gameVenue" class="form-label">Game venue</label>
                <input
                  type="text"
                  class="form-control gameVenue"
                  id="gameVenue"
                  name="gameVenue"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-danger deleteGame">Delete</a>
                <button type="submit" name="updateGame" class="btn btn-success">Update</button>
              </div>
            </form>
            <!-- EDIT GAME FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- EDIT GAME MODAL END -->

    <!-- BOOTSTAP JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
