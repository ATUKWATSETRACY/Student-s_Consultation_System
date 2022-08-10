<?php

    include 'database.php';
    
    session_start();
    
    $uid = $_SESSION['users_id'];

    $names = $_SESSION['names'];

    $query = "SELECT posts.id, posts.body, posts.image_url, users.fname, users.lname FROM posts INNER JOIN users WHERE posts.users_id = '$uid' AND users.id = '$uid'";

    $posts = new Database();
    $output = $posts->readData($query);

    return $output;

?>