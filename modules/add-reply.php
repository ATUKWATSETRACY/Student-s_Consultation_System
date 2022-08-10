<?php

    include_once('database.php');

    if (isset($_POST['add-reply'])) {

        session_start();

        $uid = $_SESSION['users_id'];

        $reply = $_POST['the-reply'];
        $complaint_id = $_POST['complaint-id'];

        $reply_query = "INSERT INTO feedback (reply, complaints_id, lecturer_id) VALUES ('$reply', '$complaint_id', '$uid')";

        $database = new Database();

        if ($database->saveData($reply_query)) {

            $reply_notification = " New Comment : " . $reply . " on your post";

            $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$reply_notification')";
            
            $database->saveData($notification_query);
        
            header('Location: ../index.php');
        
        } else {
        
            exit();

        }

    }

?>