<?php

  include 'database.php';

  session_start();
    
  $uid = $_SESSION['lecturer_id'];

  $query = "SELECT * FROM announcements WHERE users_id = '$uid' ORDER BY id DESC";

  $posts = new Database();
  
  $output = $posts->readData($query);

?>