<?php include('includes/config/db-connect.php');

  // LOIGN HANDLER
  if(isset($_POST['login'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
      $_SERVER['loignError'] = 'Please provide your email and password.';
    }
    $sql = 'SELECT * FROM admin WHERE Email = :email && Password = :password';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      'email'   => $_POST['email'],
      'password'=> md5($_POST['password'])
    ]);
    if( $stmt->rowCount() > 0){
      $_SESSION['loggedIn'] = true;
      header('location: index.php');
    }else{
      $_SESSION['loignError'] = "Please provide correct email and password.";
    }
  }

  // REDIRECT TO DASHBOARD IF USER IS LOGGED IN
  if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
    header('location: /sportsevents/index.php');
 
}
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
    <title>Sports Events - Login</title>
  </head>
  <body style="height: 100vh">
    <!-- HEADER STARTS -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand fs-1" href="./"
          >Sports Events Management System</a
        >
      </div>
    </nav>
    <!-- HEADER ENDS -->

    <!-- MAIN CONTENT STARTS -->
    <main class="container">
       <!-- LOGIN ERROR MESSAGE -->
       <?php 
      if(isset($_SESSION['loignError'])):?>
        <div class="alert alert-warning alert-dismissible fade show col-10 col-md-6 col-4 mx-auto mt-4" role="alert">
          <strong>Error!</strong> 
          <?php echo $_SESSION['loignError']?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        unset($_SESSION['loignError']);
        endif
        ?>
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
      <div class="card">
        <div class="card-body py-5">
          <h2 class="card-title text-center text-uppercase">Login</h2>
          <form class="row g-3 needs-validation" action="login.php" method="POST" novalidate>
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <button type="submit" name="login" class="btn btn-success">Login</button>
            </form>
      </div>
      
      </div>
    </main>
    <!-- MAIN CONTENT ENDS -->
    <!-- BOOTSTAP JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
