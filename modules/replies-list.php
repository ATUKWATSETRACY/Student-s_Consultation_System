<?php

    // include 'database.php';

    // session_start();
    // $uid = $_SESSION['users_id'];
    // $names = $_SESSION['names'];

    // $replies = new Database();
    // $query = "SELECT * FROM complaints WHERE users_id = '$uid' ORDER BY id DESC ";
    // $output = $replies->readData($query);

    // $result = "";

    // if ($output) {
        
    //     // foreach ($output as $key => $value) {

    //     while ($output <= 10) {
            
    //         $that_id = $value['id'];

    //         $query2 = "SELECT reply FROM feedback WHERE complaints_id = '$that_id' ORDER BY id DESC";
    //         $res = $replies->readData($query2);

    //         print_r($res);
                
    //         if ($res) {
    //             foreach ($res as $key => $val) {

    //                 $result .= '
                
    //                     <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
    //                         <div class="card card-plain">
    //                             <div class="card-body p-3">
    //                                 <p class="card-text"> <strong> Recipient : </strong> '.$value['recipient'].' </p>
    //                                 <p class="card-text"> <strong> Title :</strong> '.$value['title'].'</p>
    //                                 <p class="card-text"> <strong> Body :</strong> '.$value['body'].'</p>
        
    //                                 <div class="row g-3" id="moreReplies">
    //                                     <!-- MORE REPLIES ON THE SAME COMPLAINT -->
    //                                     <div class="col-auto">
    //                                         <p class="card-text"> '.$val['reply'].'</p>
    //                                     </div>
    //                                 </div>
        
    //                                 <div class="d-flex align-items-center justify-content-between">
    //                                     <form method="POST" action="modules/add-reply.php">
    //                                         <br>
    //                                         <div class="row g-3">
    //                                             <div class="col-auto">
    //                                                 <input type="text" name="the-reply" class="form-control" placeholder="Enter reply ">
    //                                             </div>
    //                                             <div class="col-auto">
    //                                                 <button type="submit" name="add-reply" class="btn btn-sm btn-primary mb-3"> REPLY </button>
    //                                             </div>
    //                                         </div>
    //                                     </form>
    //                                 </div>
                                    
    //                             </div>
    //                         </div>
    //                     </div>
                
    //                 ';
    //             }
    //         }
    //     }
      
    // } else {
  
    //     $result .= '<div class="text"> Not available at the moment. </div>';  
    
    // }
    
    // echo $result;

?>