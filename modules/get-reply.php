<?php

    include 'database.php';

    session_start();
    $uid = $_SESSION['users_id'];
    $names = $_SESSION['names'];

    $replies = new Database();
    $query = " SELECT * FROM feedback INNER JOIN complaints INNER JOIN users WHERE feedback.complaints_id = complaints.id AND feedback.lecturer_id = users.id ";
    $output = $replies->readData($query);

    return $output;

?>