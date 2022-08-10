<?php

  include '../modules/database.php';
  include '../modules/signup.php';

  $res = "";
  $mail = "";
  $fname = "";
  $lname = "";
  $pass2 = "";
  $pass = "";

  if (isset($_POST['sign-up-btn'])) {

    $mail = $_POST['uni-email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];

    if (strcmp($pass, $pass2) == 0) {

      $signup = new Signup();
      $res = $signup->evaluate($_POST);
  
      if ($res === "") {
        die;
      }else {
        $result = $res;
      }
    }else {
      $res .= "Passwords do not match";
    }

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Yo-Consultant
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0"> Yo-Consultant </h4>
                </div>
                
                <!-- Error Message -->
                <h4 id="error_message" class="text-danger font-weight-bolder text-center mt-2 mb-0"> <?php echo $res; ?> </h4>

              </div>
              <div class="card-body">
                <form role="form" method="POST" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Enter University Email</label>
                    <input type="email" id="uni-email" name="uni-email" value="<?php echo $mail; ?>" class="form-control" required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Enter First Name</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $fname;?>" required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Enter Last Name</label>
                    <input type="text" name="lname" class="form-control" value="<?php echo $lname;?>" required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Enter Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" id="confirm_password" name="password2" class="form-control" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="sign-up-btn" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign up</button>
                  </div>
                </form>
 
                <p class="mt-4 text-sm text-center">
                  Not a Student ?
                  <a href="../pages/sign-up-admin.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
                </p>

                <!-- ALREADY WITH AN ACCOUNT -->
                <p class="mt-4 text-sm text-center">
                  Already have an account ?
                  <a href="../pages/sign-in.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                <script>
                  document.write(new Date().getFullYear())
                  document.write("-")
                  document.write(new Date().getMonth())
                  document.write("-")
                  document.write(new Date().getDay())
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>