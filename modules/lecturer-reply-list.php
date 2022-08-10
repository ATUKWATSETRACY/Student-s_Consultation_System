<?php
    
    include "lecturer-get-reply.php";

    $result = "";

    if ($output) {    

        foreach ($output as $key => $value) {
                
            $result .= '
          
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-plain">
                    <div class="card-body p-3">
                        <p class="card-text"> <strong> Recipient : </strong> '.$value['recipient'].' </p>
                        <p class="card-text"> <strong> Title :</strong> '.$value['title'].'</p>
                        <p class="card-text"> <strong> Body :</strong> '.$value['body'].'</p>

                        <div class="row g-3">
                            <div class="col-auto">
                                <p class="card-text"> <strong> '.$value['fname'].' &nbsp; '.$value['lname'].' \'s  Reply : </strong></p>
                            </div>
                            <div class="col-auto">
                            <p class="card-text"> '.$value['reply'].'</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <form method="POST" action="modules/send-reply.php" class="send-reply-form">
                                <br>
                                <div class="row g-3">
                                    <div class="col-auto">
                                        <input type="text" name="the-comment" class="form-control" placeholder="Enter reply ">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="send-reply" class="btn btn-sm btn-primary mb-3"> REPLY </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
          
            ';

        }
      
    } else {
  
        $result .= '<div class="text"> Not available at the moment. </div>';
    
    }
    
    echo $result;

?>