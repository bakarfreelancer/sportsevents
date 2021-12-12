<?php include('./includes/components/header.php');
include('./includes/handlers/displayplayers.php'); ?>
    <!-- MAIN CONTENT STARTS -->
    <main class="container">

    <!-- ADD PLAYER ERROR MESSAGE -->
    <?php 
        if(isset($_SESSION['addPlayerError'])):?>
          <div class="alert alert-warning alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Error!</strong> 
            <?php echo $_SESSION['addPlayerError']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addPlayerError']);
          endif
          ?>
          
          <!-- ADD PLAYER SUCCESS MESSAGE -->
          <?php 
        if(isset($_SESSION['addPlayerSuccess'])):?>
          <div class="alert alert-success alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Success!</strong> 
            <?php echo $_SESSION['addPlayerSuccess']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addPlayerSuccess']);
          endif
          ?>

      <h2 class="my-4 text-decoration-underline">Players</h2>
      <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">PNIC</th>
            <th scope="col">Player Name</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">Games</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          <?php if(isset($players)):?>
          <?php foreach($players as $player):?>
          <tr>
            <td><?php echo $player->PNic?></td>
            <td><?php echo $player->PName?></td>
            <td><?php echo $player->PAddress?></td>
            <td><?php echo $player->PContact?></td>
            <td><a class="btn btn-primary">View</a></td>
            <td>
              <a
                class="btn btn-success editPlayer"
                data-bs-toggle="modal"
                data-bs-target="#editPlayerModal"
                >Edit</a
              >
            </td>
          </tr>
          <?php endforeach;?>
          <?php endif;?>
         
        </tbody>
      </table>
    </main>
    <!-- MAIN CONTENT ENDS -->


    <!-- ADD PLAYER MODAL START -->
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
            <h5 class="modal-title" id="addPlayerModalLabel">Add New Player</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- ADD PLAYER FORM START -->
            <form class="row g-3 needs-validation" action="includes/handlers/addplayer.php" method="POST" novalidate>
              <div class="col-12">
                <label for="playerId" class="form-label">Player NIC</label>
                <input
                  type="text"
                  class="form-control"
                  id="playerId"
                  name="playerId"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="playerName" class="form-label">Player name</label>
                <input
                  type="text"
                  class="form-control"
                  id="playerName"
                  name="playerName"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" 
                id="address"
                name="address"
                 required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="playerContact" class="form-label">Contact</label>
                <input
                  type="text"
                  class="form-control"
                  id="playerContact"
                  name="playerContact"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="addPlayer" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- ADD PLAYER FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- ADD PLAYER MODAL END -->

    <!-- EDIT PLAYER MODAL START -->
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
            <h5 class="modal-title" id="editPlayerModalLabel">
              Add New Player
            </h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- EDIT PLAYER FORM START -->
            <form class="row g-3 needs-validation" action="includes/handlers/updateplayer.php" method="POST" novalidate>
              <div class="col-12">
                <label for="playerId" class="form-label">Player NIC</label>
                <input
                  type="text"
                  class="form-control playerId"
                  id="playerId"
                  name="playerId"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="playerName" class="form-label">Player name</label>
                <input
                  type="text"
                  class="form-control playerName"
                  id="playerName"
                  name="playerName"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input
                  type="text"
                  class="form-control address"
                  id="address"
                  name="address"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="playerContact" class="form-label">Contact</label>
                <input
                  type="text"
                  class="form-control playerContact"
                  id="playerContact"
                  name="playerContact"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <input type="hidden" name="pid" class="pid">
              <div class="modal-footer">
                <a href="#" class="btn btn-danger deletePlayer">Delete</a>
                <button type="submit" name="updatePlayer" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- EDIT PLAYER FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- EDIT PLAYER MODAL END -->

    <!-- BOOTSTAP JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
