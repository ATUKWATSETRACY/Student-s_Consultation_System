<?php 

  session_start();
  
  $uid = $_SESSION['lecturer_id'];

  $email = $_SESSION['lecturer_email'];

  include 'database.php';

  $lecturer_query = "SELECT * FROM complaints WHERE recipient = '$email' ORDER BY id DESC";
  // $lecturer_query = "SELECT * FROM complaints ORDER BY id DESC";

  $posts = new Database();
    
  $output = $posts->readData($lecturer_query);
      
?>