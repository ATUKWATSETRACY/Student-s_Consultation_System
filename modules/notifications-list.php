<?php

  include "get-notifications.php";

  $result = "";

  if ($output) {    

    foreach ($output as $key => $value) {
              
      $result .= 
      '
      <div class="alert alert-dark alert-dismissible text-white" role="alert">
        <span class="text-sm"> ' . $value['genre'] . ' </span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ';

    }
    
  }  else{

    $result .= '<div class="text"> Not available at the moment. </div>';
  
  }

  echo $result;

?>