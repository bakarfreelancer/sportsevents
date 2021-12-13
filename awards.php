<?php 
include("./includes/components/header.php");
include("./includes/handlers/displayawards.php");

  // Get Players NIC from db
  $sql = "SELECT PNic FROM player";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Get Games Id from db
  $sql = "SELECT GId FROM game";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $gamesIds = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <!-- MAIN CONTENT STARTS -->
    <main class="container overflow-auto">

    <!-- ADD AWARD ERROR MESSAGE -->
    <?php 
        if(isset($_SESSION['addAwardError'])):?>
          <div class="alert alert-warning alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Error!</strong> 
            <?php echo $_SESSION['addAwardError']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addAwardError']);
          endif
          ?>
          
          <!-- ADD AWARD SUCCESS MESSAGE -->
          <?php 
        if(isset($_SESSION['addAwardSuccess'])):?>
          <div class="alert alert-success alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Success!</strong> 
            <?php echo $_SESSION['addAwardSuccess']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addAwardSuccess']);
          endif
          ?>

      <h2 class="my-4 text-decoration-underline">Awards</h2>
      <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">NIC</th>
            <th scope="col">Player Name</th>
            <th scope="col">Game ID</th>
            <th scope="col">Game Name</th>
            <th scope="col">Award Name</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          <!-- DISPLAY ALL AWARDS -->
          <?php foreach($awards as $award):?>
          <tr>
            <th scope="row"><?php echo $award->PNic?></th>
            <td><?php echo $award->PName?></td>
            <td><?php echo $award->GId?></td>
            <td><?php echo $award->GName?></td>
            <td><?php echo $award->AwardName?></td>
            <td>
              <a
                class="btn btn-success editAward"
                data-bs-toggle="modal"
                data-bs-target="#editAwardModal"
                >Edit</a
              >
            </td>
          </tr>
          <?php endforeach?>
          
        </tbody>
      </table>
    </main>
    <!-- MAIN CONTENT ENDS -->


    <!-- ADD AWARD MODAL START -->
    <div
      class="modal fade"
      id="addAwardModal"
      tabindex="-1"
      aria-labelledby="addAwardModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addAwardModalLabel">Add New Award</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- ADD AWARD FORM START -->
            <form class="row g-3 needs-validation" action="includes/handlers/addaward.php" method="POST" novalidate>
              <div class="col-12">
                <label for="playerNic" class="form-label"
                  >Player NIC Number</label
                >
                <select class="form-select" id="playerNic" name="playerNic" aria-label="Player NIC">
                  <option selected>Select Player</option>
                  <?php foreach($result as $row) : ?>
                    <option value="<?php echo $row['PNic']; ?>"><?php echo $row['PNic']; ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid NIC number.
                </div>
              </div>

              <div class="col-12">
                <label for="GId" class="form-label">Game Id</label>
                <select class="form-select" id="GId" name="GId" aria-label="Game Id">
                  <option selected>Select Game</option>
                  <?php foreach($gamesIds as $row) : ?>
                    <option value="<?php echo $row['GId']; ?>"><?php echo $row['GId']; ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Please provide a game id.</div>
              </div>

              <div class="col-12">
                <label for="awardName" class="form-label">Award Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="awardName"
                  name="awardName"
                  required
                />
                <div class="invalid-feedback">
                  Please provide a valid award name.
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="addAward" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- ADD AWARD FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- ADD AWARD MODAL END -->

    <!-- EDIT AWARD MODAL START -->
    <div
      class="modal fade"
      id="editAwardModal"
      tabindex="-1"
      aria-labelledby="editAwardModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editAwardModalLabel">Add New Award</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- EDIT AWARD FORM START -->
            <form class="row g-3 needs-validation" action="includes/handlers/updateaward.php" method="POST" novalidate>
              <input type="hidden" name="oldGId" class="oldGId">
              <input type="hidden" name="oldAwardName" class="oldAwardName">
              <div class="col-12">
                <label for="playerNic" class="form-label"
                  >Player NIC Number</label
                >
                <select
                  class="form-select playerNic"
                  id="playerNic"
                  name="playerNic"
                  aria-label="Player NIC"
                >
                  <option selected>Select Player</option>
                  <?php foreach($result as $row) : ?>
                    <option value="<?php echo $row['PNic']; ?>"><?php echo $row['PNic']; ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid NIC number.
                </div>
              </div>

              <div class="col-12">
                <label for="GId" class="form-label">Game Id</label>
                <select class="form-select GId" id="GId" name="GId" aria-label="Game Id">
                  <option selected>Select Game</option>
                  <?php foreach($gamesIds as $row) : ?>
                    <option value="<?php echo $row['GId']; ?>"><?php echo $row['GId']; ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Please provide a game id.</div>
              </div>

              <div class="col-12">
                <label for="awardName" class="form-label">Award Name</label>
                <input
                  type="text"
                  class="form-control awardName"
                  id="awardName"
                  name="awardName"
                  required
                />
                <div class="invalid-feedback">
                  Please provide a valid award name.
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-danger deleteAward">Delete</a>
                <button type="submit" name="updateAward" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- EDIT AWARD FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- EDIT AWARD MODAL END -->

    <!-- BOOTSTAP JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
