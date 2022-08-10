<?php
  
    include "database.php";

    if (isset($_POST['drop-post-btn'])) {

        session_start();

        $uid = $_SESSION['users_id'];

        $complaint_id = $_POST['post_id'];

        $sql = "DELETE FROM posts WHERE id = '$complaint_id'";
    
        $database = new Database();
        
        $database->saveData($sql);

        $complaint_notification = " You've deleted a post ";
    
        $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$complaint_notification')";
            
        $database->saveData($notification_query);
    
        header('Location: ../index.php');

    }

?>