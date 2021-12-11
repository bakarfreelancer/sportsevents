<?php include('./includes/components/header.php'); ?>

    <!-- MAIN CONTENT STARTS -->
    <main class="container overflow-auto">
      <h2 class="my-4 text-decoration-underline">Issued Items</h2>
      <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Player NIC</th>
            <th scope="col">Player Name</th>
            <th scope="col">Item Name</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>15608</td>
            <td>Ahmad Khan</td>
            <td>Bat</td>
            <td>
              <a
                class="btn btn-success editItem"
                data-bs-toggle="modal"
                data-bs-target="#editItemModal"
                >Edit</a
              >
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>15607</td>
            <td>Ahmad Khan</td>
            <td>Ball</td>
            <td>
              <a
                class="btn btn-success editItem"
                data-bs-toggle="modal"
                data-bs-target="#editItemModal"
                >Edit</a
              >
            </td>
          </tr>
        </tbody>
      </table>
    </main>
    <!-- MAIN CONTENT ENDS -->
    
    <!-- ADD AWARD MODAL START -->
    <div
      class="modal fade"
      id="addItemModal"
      tabindex="-1"
      aria-labelledby="addItemModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addItemModalLabel">Add New Award</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- ADD ITEM FORM START -->
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-12">
                <label for="playerNicAdd" class="form-label"
                  >Player NIC Number</label
                >
                <select
                  class="form-select"
                  id="playerNicAdd"
                  aria-label="Player NIC"
                >
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
                <label for="sportsItemAdd" class="form-label"
                  >Sports item</label
                >
                <select
                  class="form-select"
                  id="sportsItemAdd"
                  aria-label="Player NIC"
                >
                  <option selected>Select Item</option>
                  <option value="Bat">Bat</option>
                  <option value="Ball">Ball</option>
                  <option value="Gloves">Gloves</option>
                  <option value="Wickets">Wickets</option>
                  <option value="Helmet">Helmet</option>
                  <option value="Football">Football</option>
                  <option value="Shoes">Shoes</option>
                  <option value="Basketball">Basketball</option>
                  <option value="Pool">Pool Stick</option>
                  <option value="Hockey">Hockey</option>
                  <option value="Pads">Pads</option>
                  <option value="Track">Track Suit</option>
                  <option value="Cap">Cap</option>
                </select>
                <div class="invalid-feedback">Please select an item.</div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- ADD ITEM FORM END -->
          </div>
        </div>
      </div>
    </div>
    <!-- ADD AWARD MODAL END -->

    <!-- EDIT AWARD MODAL START -->
    <div
      class="modal fade"
      id="editItemModal"
      tabindex="-1"
      aria-labelledby="editItemModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editItemModalLabel">Add New Award</h5>
            <button
              type="button"
              class="btn-close fs-3"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- EDIT ITEM FORM START -->
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
                <label for="sportsItem" class="form-label">Sports item</label>
                <select
                  class="form-select sportsItem"
                  id="sportsItem"
                  aria-label="Player NIC"
                >
                  <option selected>Select Item</option>
                  <option value="Bat">Bat</option>
                  <option value="Ball">Ball</option>
                  <option value="Gloves">Gloves</option>
                  <option value="Wickets">Wickets</option>
                  <option value="Helmet">Helmet</option>
                  <option value="Football">Football</option>
                  <option value="Shoes">Shoes</option>
                  <option value="Basketball">Basketball</option>
                  <option value="Pool">Pool Stick</option>
                  <option value="Hockey">Hockey</option>
                  <option value="Pads">Pads</option>
                  <option value="Track">Track Suit</option>
                  <option value="Cap">Cap</option>
                </select>
                <div class="invalid-feedback">Please select an item.</div>
              </div>

              <div class="modal-footer">
                <a href="#" class="btn btn-danger">Delete</a>
                <button type="submit" class="btn btn-success">Confirm</button>
              </div>
            </form>
            <!-- EDIT ITEM FORM END -->
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
