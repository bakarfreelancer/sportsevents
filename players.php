<?php include('./includes/components/header.php'); ?>
    <!-- MAIN CONTENT STARTS -->
    <main class="container">
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
          <tr>
            <td>1535334</td>
            <td>Bilal n</td>
            <td>Swatistan</td>
            <td>0535434343</td>
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
          <tr>
            <td>1435334</td>
            <td>Bi Khan</td>
            <td>Swat</td>
            <td>053543453</td>
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
          <tr>
            <td>15335334</td>
            <td>Bilal sldjKhan</td>
            <td>Swatsd Pakistan</td>
            <td>03453343</td>
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
          <tr>
            <td>153544</td>
            <td>Bilal Ali</td>
            <td>Pakistan</td>
            <td>05453343</td>
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
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-12">
                <label for="playerId" class="form-label">Player NIC</label>
                <input
                  type="text"
                  class="form-control"
                  id="playerId"
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
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="playerContact" class="form-label">Contact</label>
                <input
                  type="text"
                  class="form-control"
                  id="playerContact"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Confirm</button>
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
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-12">
                <label for="playerId" class="form-label">Player NIC</label>
                <input
                  type="text"
                  class="form-control playerId"
                  id="playerId"
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
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-danger">Delete</a>
                <button type="submit" class="btn btn-success">Confirm</button>
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
