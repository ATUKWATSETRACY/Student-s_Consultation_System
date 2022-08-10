<?php

    session_start();
    
    $uid = $_SESSION['lecturer_id'];

    $names = $_SESSION['lecturer_names'];

    include 'database.php';

    $query = "SELECT * FROM posts INNER JOIN users ON posts.users_id = users.id WHERE posts.users_id = '$uid'";

    $posts = new Database();
    $output = $posts->readData($query);

?>