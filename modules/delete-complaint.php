<?php
  
    include "database.php";

    if (isset($_POST['drop-btn'])) {

        session_start();

        $uid = $_SESSION['users_id'];

        $complaint_id = $_POST['complaint-id'];
        $complaint_title = $_POST['c-title'];

        $sql = "DELETE FROM complaints WHERE id = '$complaint_id'";
    
        $database = new Database();
        
        $database->saveData($sql);

        $complaint_notification = " You've deleted a complaint ";

        $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$complaint_notification')";
        
        $database->saveData($notification_query);

        header('Location: ../index.php');

    }

?>