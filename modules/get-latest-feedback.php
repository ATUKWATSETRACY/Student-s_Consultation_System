<?php
    
    session_start();
    
    $uid = $_SESSION['users_id'];

    include 'database.php';

    $query = " SELECT reply, fname, lname FROM feedback INNER JOIN users WHERE feedback.lecturer_id = users.id ORDER BY feedback.id DESC LIMIT 1 ";

    $posts = new Database();
    $output = $posts->readData($query);

    $result = "";

    if ($output) {    

        foreach ($output as $key => $value) {
              
        $result .= 
        '
            <h6 class="mb-0 "> LATEST COMPLAINT FEEDBACK </h6>
            <span class="font-weight-bolder">'.$value['reply'].'</span>
            <hr class="dark horizontal">
            <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1"> By: '.$value['fname']. '&nbsp;' . $value['lname'] . ' </i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
            </div>
            ';

        }
    
    }  else {

        $result .= '<div class="text"> Not available at the moment. </div>';
  
    }

    echo $result;

?>