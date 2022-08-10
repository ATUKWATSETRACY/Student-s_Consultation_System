<?php
    
    session_start();
    
    $uid = $_SESSION['lecturer_id'];

    include 'database.php';

    $query = " SELECT COUNT(id) FROM complaints";

    $posts = new Database();

    $output = $posts->readData($query);

    $result = "";

    if ($output) {    

        foreach ($output as $key => $value) {
              
        $result .= $value['COUNT(id)'];

        }
    
    }  else {

        $result .= '<div class="text"> Not available at the moment. </div>';
  
    }

    echo $result;

?>