<?php

    include_once('database.php');

    if (isset($_POST['send-reply'])) {

        session_start();

        $uid = $_SESSION['users_id'];

        $reply = $_POST['reply-body'];
        $lecturer_id = $_POST['lecturer-id'];

        $comment_query = "INSERT INTO feedback (reply, complaints_id, lecturer_id) VALUES ('$reply', '$lecturer_id', '$uid')";

        $database = new Database();

        if ($database->saveData($comment_query)) {

            $comment_notification = " New Comment : " . $comment . " on your post";

            $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$comment_notification')";
            
            $database->saveData($notification_query);
        
            header('Location: ../lecturer.php');
        
        } else {
        
            exit();

        }

    }

?>