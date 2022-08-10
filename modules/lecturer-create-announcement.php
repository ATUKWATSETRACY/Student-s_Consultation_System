<?php

    include_once('database.php');
    
    $msg = " ";

    if (isset($_POST['new-ann'])) {

        session_start();

        $uid = $_SESSION['lecturer_id'];

        $announcement_title = $_POST['ann-title'];
        $announcement_body = $_POST['ann-body'];
        
        $announcement_query = "INSERT INTO announcements (title, body, users_id) VALUES ('$announcement_title', '$announcement_body', '$uid')";

        $database = new Database();

        if ($database->saveData($announcement_query)) {

            $ann_notification = " New nnouncement : " . $announcement_title;

            $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$ann_notification')";

            $database->saveData($notification_query);

            header('Location: ../lecturer.php');
        
        } else {
        
            exit();

        }
    }

?>