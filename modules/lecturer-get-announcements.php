<?php

  include 'database.php';

  $query = "SELECT * FROM announcements ORDER BY id DESC";

  $posts = new Database();
  
  $output = $posts->readData($query);

?>