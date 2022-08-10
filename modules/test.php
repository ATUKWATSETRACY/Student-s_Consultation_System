<?php

    include_once('database.php');

    session_start();

    $uid = $_SESSION['users_id'];

    if(!empty($_POST['category'])){
        $category = $_POST['category'];
        $vname = $_POST['visitorName'];
        $regno = $_POST['RegNo'];
        $studyyear = $_POST['StudyYear'];
        $semester = $_POST['Semester'];
        $course = $_POST['Course'];
        $lecturer = $_POST['lmail'];
        $subject = $_POST['Subject'];
    }

    // if(!empty($_POST['category'])){
    //     $cat = $_POST['category'];
    //     $name = $_POST['name'];
    //     $mail = $_POST['mail'];
    // }
   
    // echo $name . $mail . $cat;

    $complaint_query = "INSERT INTO complaints (recipient, title, body, users_id) VALUES ('$lecturer', '$category', '$vname . $course . $regno . $studyyear . $semester . $course . $subject ', '$uid')";

    $database = new Database();

    if ($database->saveData($complaint_query)) {

        $complaint_notification = " New Complaint : " . $complaint_title . " ";

        $notification_query = "INSERT INTO notifications (users_id, genre) VALUES ('$uid', '$complaint_notification')";
        
        $database->saveData($notification_query);

        header('Location: ../index.php');
      
    } else {
      
        exit();

    }

?>