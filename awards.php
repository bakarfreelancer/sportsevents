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
        <a class="navbar-brand fs-1" href="/">Sports Events</a>

        <button
          type="button"
          class="btn btn-primary ms-auto me-3"
          data-bs-toggle="modal"
          data-bs-target="#addAwardModal"
        >
          Add Award
        </button>

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

    <!-- MAIN CONTENT STARTS -->
    <main class="container overflow-auto">
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
          <tr>
            <th scope="row">15607</th>
            <td>Ahmad Khan</td>
            <td>2</td>
            <td>Cricket</td>
            <td>Main of the match</td>
            <td>
              <a
                class="btn btn-success editAward"
                data-bs-toggle="modal"
                data-bs-target="#editAwardModal"
                >Edit</a
              >
            </td>
          </tr>
          <tr>
            <th scope="row">15608</th>
            <td>Ahmad Ali</td>
            <td>3</td>
            <td>Hockey</td>
            <td>Main of tour</td>
            <td>
              <a
                class="btn btn-success editAward"
                data-bs-toggle="modal"
                data-bs-target="#editAwardModal"
                >Edit</a
              >
            </td>
          </tr>
        </tbody>
      </table>
    </main>
    <!-- MAIN CONTENT ENDS -->

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
              href="index.html"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
            >
              Dashboard</a
            >
            <a
              href="games.html"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
            >
              Games</a
            >
            <a
              href="players.html"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
              >Players</a
            >
            <a
              href="sportsItems.html"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
              >Sports Items</a
            >
            <a
              href="awards.html"
              class="d-block fs-4 text-decoration-none text-dark mb-3"
              >Awards</a
            >
            <a class="d-block fs-4 text-decoration-none text-dark mb-3"
              >Logout</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- MENU MODAL END -->

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
            <!-- ADD USER FORM START -->
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-12">
                <label for="playerNic" class="form-label"
                  >Player NIC Number</label
                >
                <select class="form-select" aria-label="Player NIC">
                  <option selected>Select Player</option>
                  <option value="15607">15607</option>
                  <option value="2">15608</option>
                  <option value="3">53260934</option>
                  <option value="3">1560934</option>
                  <option value="2">1523408</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid NIC number.
                </div>
              </div>

              <div class="col-12">
                <label for="playerNic" class="form-label">Game Id</label>
                <select class="form-select" aria-label="Game Id">
                  <option selected>Select Game</option>
                  <option value="15607">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                  <option value="2">5</option>
                </select>
                <div class="invalid-feedback">Please provide a game id.</div>
              </div>

              <div class="col-12">
                <label for="awardName" class="form-label">Award Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="awardName"
                  required
                />
                <div class="invalid-feedback">
                  Please provide a valid award name.
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- ADD USER FORM END -->
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
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-12">
                <label for="playerNic" class="form-label"
                  >Player NIC Number</label
                >
                <select
                  class="form-select playerNic"
                  id="playerNic"
                  aria-label="Player NIC"
                >
                  <option selected>Select Player</option>
                  <option value="15607">15607</option>
                  <option value="15608">15608</option>
                  <option value="3">53260934</option>
                  <option value="3">1560934</option>
                  <option value="2">1523408</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid NIC number.
                </div>
              </div>

              <div class="col-12">
                <label for="GId" class="form-label">Game Id</label>
                <select class="form-select GId" id="GId" aria-label="Game Id">
                  <option selected>Select Game</option>
                  <option value="15607">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                  <option value="2">5</option>
                </select>
                <div class="invalid-feedback">Please provide a game id.</div>
              </div>

              <div class="col-12">
                <label for="awardName" class="form-label">Award Name</label>
                <input
                  type="text"
                  class="form-control awardName"
                  id="awardName"
                  required
                />
                <div class="invalid-feedback">
                  Please provide a valid award name.
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-danger">Delete</a>
                <button type="submit" class="btn btn-success">Confirm</button>
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
