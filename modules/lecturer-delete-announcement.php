<?php
  
    include "database.php";

    if (isset($_POST['drop-ann-btn'])) {

        session_start();
    
        $uid = $_SESSION['lecturer_id'];

        $announcement_id = $_POST['ann-id'];

        $sql = "DELETE FROM announcements WHERE id = '$announcement_id'";
    
        $database = new Database();
        
        $database->saveData($sql);

        $complaint_notification = " You've deleted a complaint ";

        $notification_query = " INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$complaint_notification')";
        
        $database->saveData($notification_query);

        header('Location: ../lecturer.php');

    }

?>