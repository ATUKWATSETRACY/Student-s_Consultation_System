<?php

    $msg = " ";

    include_once('database.php');

    if (isset($_POST['new-complaint'])) {

      session_start();

      $uid = $_SESSION['users_id'];

      $complaint_recipient = $_POST['receiver'];
      $complaint_title = $_POST['complaint-title'];
      $complaint_body = $_POST['complaint-body'];
      
      $complaint_query = "INSERT INTO complaints (recipient, title, body, users_id) VALUES ('$complaint_recipient', '$complaint_title', '$complaint_body', '$uid')";

      $database = new Database();

      if ($database->saveData($complaint_query)) {

        $complaint_notification = " New Complaint : " . $complaint_title . " ";

        $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$complaint_notification')";
        
        $database->saveData($notification_query);

        header('Location: ../index.php');
      
      } else {
      
        exit();

      }

  }

?>