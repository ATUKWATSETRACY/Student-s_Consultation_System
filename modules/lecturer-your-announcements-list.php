<?php
    
  include "lecturer-your-get-announcements.php";
  
  $result = "";

  if ($output) {    

    foreach ($output as $key => $value) {
              
      $result .= 
      '
      <tr>
        <td>
          <div class="d-flex px-2 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm"> ' . $value['title'] . ' </h6>
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
          <form method="post" action="modules/lecturer-delete-announcement.php">
            <input type="text" name="ann-id" value="'.$value['id'].'" class="form-control" hidden>
            <button type="submit" name="drop-ann-btn" class="btn btn-danger btn-sm"> DELETE </button>
          </form>
        </td>
      </tr>

      ';

    }
    
  } else {

    $result .= '<div class="text"> Not available at the moment. </div>';
  
  }

  echo $result;

?>