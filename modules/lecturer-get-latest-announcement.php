<?php
    
    session_start();
    
    $uid = $_SESSION['lecturer_id'];

    include 'database.php';

    $query = "SELECT body, fname, lname FROM announcements INNER JOIN users WHERE announcements.users_id = users.id ORDER BY announcements.id DESC LIMIT 1";

    $posts = new Database();
    $output = $posts->readData($query);

    $result = " ";

    if ($output) {    

        foreach ($output as $key => $value) {
              
        $result .= 
        '
            <h6 class="mb-0 "> LATEST ANOUNCEMENT </h6>
            <span class="font-weight-bolder">'.$value['body'].'</span>
            <hr class="dark horizontal">
            <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1"> By: '.$value['fname']. '&nbsp;' . $value['lname'] . ' </i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
            </div>
        ';

        }
    
    }  else {

        $result .= '<div class="text"> Not available at the moment. </div>';
  
    }

    echo $result;

?>