<?php

    include_once('database.php');

    if (isset($_POST['add-reply'])) {

        session_start();

        $uid = $_SESSION['lecturer_id'];

        $comment = $_POST['the-comment'];
        
        $post_id = $_POST['post_id'];

        $comment_query = "INSERT INTO comments (post_comments, posts_id, users_id) VALUES ('$comment', '$post_id', '$uid')";

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