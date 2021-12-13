
<?php 
if(!isset($_GET['PNic'])){
  header("Location: players.php");
}
  
include("./includes/components/header.php");

// PLAYER NIC, PLAYER NAME, GAME ID, GAME NAME, DELETE BUTTON.
// 1. Player, 2. Game, 3. PlayerGame
// $sql = "SELECT playergame., player.name" 

// GET PLAYER NAME
$stmt = $pdo->prepare("SELECT PName FROM player WHERE PNic = :PNic");
$stmt->execute(['PNic' => $_GET['PNic']]);
$player = $stmt->fetch();
if($player == false){
  echo "<script>window.location = 'players.php'</script>";
  header("Location: players.php");
}
$playerName = $player->PName;

  // GET GAME INFO
  $sql = "SELECT  game.* FROM playergame INNER JOIN game ON playergame.GId = game.GId WHERE playergame.PNic = :PNic";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['PNic' => $_GET['PNic']]);
  $games = $stmt->fetchAll();


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
        if(isset($_SESSION['addPlayerGmError'])):?>
          <div class="alert alert-warning alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Error!</strong> 
            <?php echo $_SESSION['addPlayerGmError']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addPlayerGmError']);
          endif
          ?>
          
          <!-- ADD AWARD SUCCESS MESSAGE -->
          <?php 
        if(isset($_SESSION['addPlayerGmSuccess'])):?>
          <div class="alert alert-success alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
            <strong>Success!</strong> 
            <?php echo $_SESSION['addPlayerGmSuccess']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
          unset($_SESSION['addPlayerGmSuccess']);
          endif
          ?>
      <div class="row align-items-center">

        <h2 class="col my-4 text-decoration-underline">Name: <?php echo $playerName?></h2>
        <h5 class="col"><b>Player Nic: </b><?php echo $_GET['PNic']?></h5>
      </div>
      <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Game ID</th>
            <th scope="col">Game Name</th>
            <th scope="col">Game Date</th>
            <th scope="col">Game Venue</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <!-- DISPLAY ALL AWARDS -->
          <?php 
          $counter = 0;
          foreach($games as $game):
          ?>
          <tr>
            <th scope="row"><?php echo ++$counter?></th>
            <td><?php echo $game->GId?></td>
            <td><?php echo $game->GName?></td>
            <td><?php echo $game->GDate?></td>
            <td><?php echo $game->GVenue?></td>
            <td>
              <a
                href="includes/handlers/deleteplayergame.php?PNic=<?php echo $_GET['PNic']?>&GId=<?php echo $game->GId?>"
                class="btn btn-danger"
                >Delete</a
              >
            </td>
          </tr>
          <?php endforeach?>
          
        </tbody>
      </table>
    </main>
    <!-- MAIN CONTENT ENDS -->


    <!-- ADD PLAYER GAME MODAL START -->
    <div
      class="modal fade"
      id="addPlayerGmModal"
      tabindex="-1"
      aria-labelledby="addPlayerGmLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addPlayerGmLabel">Assign Game To Player</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- ADD PLAYER GAME FORM START -->
            <form class="row g-3 needs-validation" action="includes/handlers/addplayergame.php" method="POST" novalidate>
                <input type="hidden" value="<?php echo $_GET['PNic']?>" name="playerNic" id="playerNic">
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

              <div class="modal-footer">
                <button type="submit" name="addPlayerGame" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- ADD PLAYER GAME FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- ADD PLAYER GAME MODAL END -->


    <!-- BOOTSTAP JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
