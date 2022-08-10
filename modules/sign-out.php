<?php
  
  session_start();

  // Checking if session variable has data
  if (isset($_SESSION['email'])) {
  
    // Setting the session variable to null
    $_SESSION['email'] = NULL;

    // Deleting the userdata from the session variable
    unset($_SESSION['email']);

    header('Location: ../pages/sign-in.php');

  } else {

    // Setting the session variable to null
    $_SESSION['lecturer_email'] = NULL;

    // Deleting the userdata from the session variable
    unset($_SESSION['lecturer_email']);

    header('Location: ../pages/sign-in.php');

  }

?>