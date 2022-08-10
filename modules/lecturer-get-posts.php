<?php

    session_start();
    
    $uid = $_SESSION['lecturer_id'];

    $names = $_SESSION['lecturer_names'];

    include 'database.php';

    $query = "SELECT * FROM posts INNER JOIN users WHERE posts.users_id = users.id";

    $posts = new Database();
    $output = $posts->readData($query);

?>