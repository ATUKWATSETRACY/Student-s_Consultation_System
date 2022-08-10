<?php 

  require_once "modules/header.php";

?>

  <!--
    =========================================================
    * Material Dashboard 2 - v3.0.0
    =========================================================

    * Product Page: https://www.creative-tim.com/product/material-dashboard
    * Copyright 2021 Creative Tim (https://www.creative-tim.com)
    * Licensed under MIT (https://www.creative-tim.com/license)
    * Coded by Creative Tim

    =========================================================

    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

  <!DOCTYPE html>
  <html lang="en">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
      Yo-Consultant
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <!-- Style/Custom css -->
    <link href="./assets/css/style.css" rel="stylesheet" />

      <!-- ChatBot -->
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.convform.css">
      <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.convform.js"></script>
      <script type="text/javascript" src="assets/js/custom.js"></script>

    </head>

    <body class="g-sidenav-show  bg-gray-200">
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white"> Yo-Consultant <?php $name; ?> </span>
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item" id="complaints-btn">
              <a id="complaints-a" class="nav-link text-white active">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <span class="material-icons">campaign</span>
                </div>
                <span class="nav-link-text ms-1"> Complaints </span>
              </a>
            </li>

            <li class="nav-item" id="feedback-btn">
              <a id="feedback-a" class="nav-link text-white">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">receipt_long</i>
                </div>
                <span class="nav-link-text ms-1"> Complaint Replies  &nbsp&nbsp
                  <span class="badge rounded-pill bg-success">4</span>
                </span>
              </a>
            </li>

            <li class="nav-item" id="announcements-btn">
              <a id="ann-a" class="nav-link text-white" >
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1"> Annoucements &nbsp&nbsp
                  <span class="badge rounded-pill bg-success">4</span>
                </span>
              </a>
            </li>

            <li class="nav-item" id="posts-btn">
              <a id="posts-a" class="nav-link text-white">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">receipt_long</i>
                </div>
                <span class="nav-link-text ms-1"> Posts &nbsp&nbsp
                  <span class="badge rounded-pill bg-success"></span>
                </span>
              </a>
            </li>

            <li class="nav-item" id="your-posts-btn">
              <a id="your-posts-a" class="nav-link text-white">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">receipt_long</i>
                </div>
                <span class="nav-link-text ms-1"> Your Posts &nbsp&nbsp
                  <span class="badge rounded-pill bg-success"></span>
                </span>
              </a>
            </li>

          </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
          <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="modules/sign-out.php" type="button"> SIGN OUT  </a>
          </div>
        </div>
      </aside>

      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <h5 class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</h5>
              </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <!-- <div class="input-group input-group-outline">
                  <label class="form-label">Type here...</label>
                  <input type="text" class="form-control">
                </div> -->
              </div>
              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </a>
                </li>
                <!-- <li class="nav-item px-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                  </a>
                </li> -->
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i id="bell" class="fa fa-bell cursor-pointer"></i>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton" id="bell-notifications-list">
                    <!-- <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="my-auto">
                            <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">New album</span> by Travis Scott
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              1 day
                            </p>
                          </div>
                        </div>
                      </a>
                    </li> -->
                    <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>credit-card</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                      <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                      <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              Payment successfully completed
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              2 days
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        
        <!-- COMPLAINTS SECTION -->
        <section class="complaints-section">
          <div class="container-fluid py-4">
            <div class="row">
              <!-- CREATE COMPLAINT COLUMN -->
              <div class="card">
                <div class="card-body">
                  <h4> WELCOME <?php echo $_SESSION['names'] ?> </h4>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-lg-4 col-md-6 mt-4 mb-4">

                <div class="card z-index-2 ">
                  <div class="card-body" id="latest-announcement">
                    
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2  ">
                  <div class="card-body" id="latest-post">
                    
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mb-3">
                <div class="card z-index-2 ">
                  <div class="card-body" id="latest-complaint">
                    <h6 class="mb-0 "> LATEST COMPLAINT FEEDBACK </h6> 
                    <p class="text-sm ">Last Campaign Performance</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                      <i class="material-icons text-sm my-auto me-1">schedule</i>
                      <p class="mb-0 text-sm">just updated</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <!-- complaints list -->
          <div class="container-fluid py-4">
            <div class="row">
              <div class="card">
                <div class="row">
                  <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                      <div class="card-header pb-0 p-3">
                        <div class="row">
                          <div class="col-6 d-flex align-items-center">
                            <h5 class="mb-0"> YOUR  COMPLAINTS </h5>
                          </div>
                          <div class="col-6 text-end">
                            <a id="new-complaint" class="btn bg-gradient-dark mb-0"  data-bs-toggle="modal" data-bs-target="#create-complaint" ><i class="material-icons text-sm">add</i>&nbsp;&nbsp; Create a Complaint </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                              <thead>
                                <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> &nbsp;&nbsp; To</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Body</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                </tr>
                              </thead>
                              <tbody id="complaints-list">
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>

        <!-- REPLIES -->
        <section class="replies">
          <div class="container-fluid py-4">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h4 class="mb-0"> REPLY SECTION  </h4>
              </div>
            </div>

            <br><br>

            <div class="card-body">
              <div class="row" id="feedback-list">
              </div>                  
            </div>

          </div>
        </section>

        <!-- ANNOUNCEMENTS -->
        <section class="announcements">
          <div class="container-fluid py-4">
            <div class="row">
              <div class="card">
                <div class="row">
                  <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                      <div class="card-header pb-0 p-3">
                        <div class="row">
                          <div class="col-6 d-flex align-items-center">
                            <h4 class="mb-0"> Annoucements </h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                              <thead>
                                <tr>
                                  <th>
                                    <div class="d-flex px-2 py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        <h5 class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10"> TITLE </h5>
                                      </div>
                                    </div>
                                  </th>

                                  <th>
                                    <div class="d-flex px-2 py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        <h5 class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10"> BODY </h5>
                                      </div>
                                    </div>
                                  </th>
                                </tr>
                              </thead>

                              <tbody id="announcements-list">
                              
                              </tbody>

                            </table>
                          </div>                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- POSTS -->
        <section class="posts">
          <div class="container-fluid py-4">

            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h5 class="mb-0"> POSTS SECTION </h5>
              </div>
            </div>

            <br><br>

            <div class="row" id="posts-list">

            </div>

            <div class="d-grid gap-2">
              <a id="new-post" class="btn bg-gradient-dark mb-0"  data-bs-toggle="modal" data-bs-target="#create-post" ><i class="material-icons text-sm">add</i>&nbsp;&nbsp; Create a Post </a>
            </div>
            
          </div>
        </section>

        <!-- YOUR POSTS -->
        <section class="your-posts">
          <div class="container-fluid py-4">

            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h5 class="mb-0"> YOUR POSTS SECTION </h5>
              </div>
            </div>

            <br><br>

            <div class="row" id="your-posts-list">

            </div>

            <div class="d-grid gap-2">
              <a id="new-post" class="btn bg-gradient-dark mb-0"  data-bs-toggle="modal" data-bs-target="#create-post" ><i class="material-icons text-sm">add</i>&nbsp;&nbsp; Create a Post </a>
            </div>
            
          </div>
        </section>
        
        <!-- MODALS -->
        <!-- complaint-modal -->
        <div class="modal fade" id="create-complaint">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> NEW COMPLAINT </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form action="modules/create-complaint.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                  <div class="mb-3">
                    <input type="text" name="receiver" style="border: 1.4px solid #000; padding-left: 1.5rem;" placeholder="Enter the recipient's email " class="form-control" id="recipient-name">
                    <br>
                    <input type="text" name="complaint-title" style="border: 1.4px solid #000; padding-left: 1.5rem;" placeholder="Enter title of the complaint" class="form-control" id="recipient-name">
                    <br>
                    <input type="text" name="complaint-body" style="border: 1.4px solid #000; padding-left: 1.5rem;" placeholder="Enter body of the complaint" class="form-control" id="recipient-name">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="new-complaint" class="btn btn-primary"> SEND </button>
                </div>
              </form>

            </div>
          </div>
        </div>

        <!-- posts-modal -->
        <div class="modal fade" id="create-post">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> NEW POST </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <form action="modules/create-post.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                  <div class="mb-3">
                    <input type="text" name="post-body" style="border: 1.4px solid #000; padding-left: 1.5rem;" placeholder="Enter Post Body " class="form-control" id="recipient-name">
                    <br>
                    <input type="file" name="file" style="border: 1.4px solid #000; padding-left: 1.5rem;" placeholder="UPLOAD AN IMAGE" class="form-control" id="post-img">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="up" class="btn btn-primary"> CREATE POST </button>
                </div>
              </form>

            </div>
            </div>
          </div>
        </div>

      </main>

      <div>
        ChatBot -->
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2 chat_icon">
          <span class="material-icons">
            Chatbot
          </span>
        </a>
        <!-- box -->
        <!-- <div class="chat_box">
          <div class="my-conv-form-wrapper">
            <form action="modules/test.php" method="POST" >
            <!-- <form action="" method="POST" > -->
<!-- 
              <select data-conv-question="Hello! How can I help you" name="category">
                <option value="MissingMarks">Missing Marks</option>
                <option value="Missedpaper">Missed Paper</option>
                <option value="MiscalculatedMarks">Miscalculated Marks</option>
                <option value="Intern">Internship Concerns</option>
                <option value="Research">Research Concerns</option>
              </select> -->

              <!-- <div data-conv-fork="category">
                <div data-conv-case="MissingMarks">
                  <input type="text" id="visitorName" name="vistorName" data-conv-question="Please, tell me your name">
                  <input type="text" id="RegNo" name="RegNo" data-conv-question="Please, tell me Registration Number">  
                  <input type="text" id="StudyYear" name="StudyYear" data-conv-question="Please, tell me the Year of Study"> 
                  <input type="text" id="Semester" name="Semester" data-conv-question="Please, tell the Semester">
                  <input type="text" id="Course" name="Course" data-conv-question="Please, tell the CourseUnit"> 
                  <input data-conv-question="Enter lecturer's e-mail" name="lmail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" required placeholder="What's Lecturer's e-mail?">
                  <input type="text" name="Subject" data-conv-question="Please, tell the Subject">
                </div> -->

                <!-- <div data-conv-case="Missedpaper" data-conv-fork="first-question2">
                  <input type="text" name="companyName" data-conv-question="Please, enter your company name"> 
                </div>
              </div>

                <input type="text" name="name" data-conv-question="Please, Enter your name">

                  <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

                  <input data-conv-question="Enter lecturer's e-mail" name="mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" required placeholder="What's Lecturer's e-mail?">

                  <input data-conv-question="Please Confirm" type="submit" name="YES" value="YES">

                  <select data-conv-question="Please Confirm">
                    <option value="Yes">Confirm</option> 
                  </select>

              </form>
          </div>
        </div> --> -->
        <!-- ChatBot end
        
      </div>

      <!--   Core JS Files   -->
      <script src="./assets/js/core/popper.min.js"></script>
      <script src="./assets/js/core/bootstrap.min.js"></script>
      <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script src="./assets/js/plugins/chartjs.min.js"></script>

      <!-- chatbot script -->
      <!-- <script type="text/javascript">
      	portfolioList = document.querySelectorAll('.portfolio-box');
      	portfolioList.forEach(function(portfolioPic) {
      		portfolioPic.addEventListener('click',function(){
      			bg = this.style.backgroundImage;
      			document.getElementById('port_pop_pic_bg').classList.add("active")
      			document.getElementById('port_pop_pic').style.backgroundImage = bg
      			document.getElementById('port_pop_pic').classList.add("active")
      		});	
      	})
      	document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
      			document.getElementById('port_pop_pic_bg').classList.remove("active")
      			document.getElementById('port_pop_pic').classList.remove("active")
      	})
      </script> -->

      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>

      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>

      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
    
      <!-- Custom script /main.js -->
      <script src="./assets/js/main.js"></script>

    </body>

  </html>
