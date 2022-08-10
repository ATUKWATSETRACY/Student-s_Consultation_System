<?php

    session_start();
    
    $uid = $_SESSION['users_id'];

    $names = $_SESSION['names'];

    include 'database.php';

    $query = "SELECT posts.id, posts.image_url, posts.body, users.fname, users.lname FROM posts INNER JOIN users WHERE posts.users_id = users.id";

    $posts = new Database();
    $output = $posts->readData($query);

    return $output;

?>