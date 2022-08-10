<?php

  include "get-complaints.php";

  $result = "";
    
  if ($output) {    

    foreach ($output as $key => $value) {
              
      $result .= 
      '
      <tr>
        <td>
          <div class="d-flex px-2 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm"> ' . $value['recipient'] . ' </h6>
            </div>
          </div>
        </td>

        <td>
          <div class="d-flex px-2 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">' . $value['title'] . '</h6>
            </div>
          </div>
        </td>
        
        <td>
          <div class="d-flex px-2 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">' . $value['body'] . '</h6>
            </div>
          </div>
        </td>
        
        <td class="align-middle text-center text-sm">
          <form method="post" action="modules/delete-complaint.php">
            <input type="hidden" name="c-title" value="' . $value['title'] . '">
            <input name="complaint-id" type="text" value='.$value['id'].' aria-label=".form-control-sm example" hidden>
            <button type="submit" name="drop-btn" class="btn btn-danger btn-sm"> DELETE </button>
          </form>
        </td>
      </tr>
      ';

    }
    
  }  else{

    $result .= '<div class="text"> Not available at the moment. </div>';
  
  }

  echo $result;

?>