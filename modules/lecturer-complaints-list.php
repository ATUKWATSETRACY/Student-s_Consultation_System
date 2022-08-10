<?php

  include "lecturer-get-complaints.php";

  $result = "";
    
  if ($output) {

    foreach ($output as $key => $value) {

      $id = $value['id'];

      $result .= 
      '
      <tr>
        <td>
          <div class="d-flex px-2 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 id="recipient" class="mb-0 text-sm"> ' . $value['recipient'] . ' </h6>
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
          <form method="POST" action="modules/lecturer-send-reply.php">
            <div class="row g-3">
              <div class="col-auto">
                <input type="text" name="reply-body" class="form-control" placeholder=" Type your Feedback ">
                <input type="text" name="reply-id" class="form-control" value="'.$id.'" hidden>
              </div>
              <div class="col-auto">
                <button type="submit" name="add-reply" class="btn btn-sm btn-primary mb-3"> send feedback </button>
              </div>
            </div>
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