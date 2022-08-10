<?php
    
    session_start();
    
    $uid = $_SESSION['lecturer_id'];

    $email = $_SESSION['lecturer_email'];

    include 'database.php';

    $lecturer_query = "SELECT * FROM notifications ORDER BY id DESC";

    $posts = new Database();

    $output = $posts->readData($lecturer_query);

?>