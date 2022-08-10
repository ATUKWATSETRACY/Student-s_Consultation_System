<?php

    session_start();
    
    $uid = $_SESSION['lecturer_id'];

    $names = $_SESSION['lecturer_names'];

    include 'database.php';

    $query = " SELECT * FROM feedback INNER JOIN complaints INNER JOIN users WHERE feedback.complaints_id = complaints.id AND feedback.lecturer_id = users.id ";

    $replies = new Database();
    $output = $replies->readData($query);

    return $output;

?>