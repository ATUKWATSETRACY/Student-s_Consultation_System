<?php

  include 'database.php';
  
  session_start();
  $uid = $_SESSION['users_id'];
  $email = $_SESSION['email'];

  $posts = new Database();
  $student_query = "SELECT * FROM complaints WHERE users_id = '$uid' ORDER BY id DESC ";
  $output = $posts->readData($student_query);
        
?>