<?php

    include_once('database.php');

    $msg = "NOT RIGHT";

    if (isset($_POST['add-reply'])) {

        session_start();

        $uid = $_SESSION['lecturer_id'];

        $reply = $_POST['reply-body'];

        $lecturer_id = $_POST['reply-id'];

        $reply_query = "INSERT INTO feedback (reply, complaints_id, lecturer_id) VALUES ('$reply', '$lecturer_id', '$uid')";

        $database = new Database();

        if ($database->saveData($reply_query)) {

            $reply_notification = " New Comment : " . $reply . " on your post";

            $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$reply_notification')";
            
            $database->saveData($notification_query);

            $msg .= " YOUR REPLY HAS BEEN SUBMITTED ";
        
            header('Location: ../lecturer.php');
        
        } else {
        
            exit();

        }

    }

?>