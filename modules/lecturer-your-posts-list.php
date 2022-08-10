<?php
    
  include "lecturer-your-get-posts.php";

  $result = "";

  if ($output) {    

      foreach ($output as $key => $value) {
                
        $result .= '
          
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
          <div class="card card-blog card-plain">
            <div class="card-header p-0 mt-n4 mx-3">
              <a class="d-block shadow-xl border-radius-xl">
                <img src="./assets/uploads/'.$value['image_url'].'" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
              </a>
            </div>
            <div class="card-body p-3">
              <p class="mb-0 text-sm">post by : '.$value['fname']. "" .$value['lname'].' </p>
              
              <h5 class="card-text">'.$value['body'].'</h5>

              <div class="d-flex align-items-center justify-content-between">
                
                <form method="POST" action="modules/lecturer-add-comment.php">
                  <div class="row g-3">
                    <div class="col-auto">
                      <label for="inputPassword2" class="visually-hidden">Password</label>
                      <input type="text" name="the-comment" class="form-control" placeholder="Enter comment ">
                      <input name="post_id" type="text" value='.$value['id'].' aria-label=".form-control-sm example" hidden>
                    </div>
                    <div class="col-auto">
                      <button type="submit" name="add-comment" class="btn btn-sm btn-primary mb-3"> COMMENT </button>
                    </div>
                  </div>
                </form>

                <form method="POST" action="modules/lecturer-delete-post.php">
                  <div class="col-auto">
                    <input name="post_id" type="text" value='.$value['id'].' aria-label=".form-control-sm example" hidden>
                    <button type="submit" name="drop-post-btn" class="btn btn-sm bg-gradient-dark mb-3"> DROP </button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
          
        ';

      }
      
  }  else{
  
      $result .= '<div class="text"> Not available at the moment. </div>';
    
  }
    
  echo $result;

?>