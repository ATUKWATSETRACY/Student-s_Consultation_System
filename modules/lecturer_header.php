<?php

  session_start();

  include 'database.php';
    
  // Checking whether user is logged in 
  if (isset($_SESSION['lecturer_email'])) {
        
  } else {

    header("Location: ./pages/sign-in.php");

    die;

  }

?>