<?php

    include_once('database.php');

    $msg = " ";

    session_start();

    $uid = $_SESSION['users_id'];

    if (isset($_POST['up'])) {

        $post_body = $_POST['post-body'];

        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];    
        $folder = "../assets/uploads/".$filename;

        $imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));

        echo($imageFileType . $filename . $folder);

        // Allow certain file format
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

            $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

        } else {
        
            $msg = "Go on ";
            
                
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder))  {
                
                $msg = "Image uploaded successfully";

            }else{
                
                $msg = "Failed to upload image";

            }
        }
        
        $equipment_query = "INSERT INTO posts (body, image_url, users_id) VALUES ('$post_body', '$filename', '$uid')";

        $database = new Database();

        if ($database->saveData($equipment_query)) {

            $post_notification = " New Post : " . $post_body;

            $notification_query = "INSERT INTO notifications (users_id, type) VALUES ('$uid' '$post_notification')";

            $database->saveData($notification_query);

            echo('POST MADE');

            header('Location: ../index.php');
        
        } else {
        
            exit();

        }
    }

?>