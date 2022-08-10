<?php
    
    session_start();
    
    $uid = $_SESSION['users_id'];

    $email = $_SESSION['email'];

    include 'database.php';

    $student_query = "SELECT * FROM notifications WHERE users_id = '$uid' ";

    $posts = new Database();
        
    $output = $posts->readData($student_query);

?>