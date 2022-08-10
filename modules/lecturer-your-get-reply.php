<?php

    session_start();
    
    $uid = $_SESSION['lecturer_id'];

    $names = $_SESSION['lecturer_names'];

    include 'database.php';

    $query = " SELECT * FROM feedback INNER JOIN complaints INNER JOIN users ON feedback.complaints_id = complaints.id AND feedback.lecturer_id = users.id WHERE feedback.lecturer_id = '$uid' ORDER BY feedback.id DESC";

    $replies = new Database();
    $output = $replies->readData($query);

    return $output;

?>