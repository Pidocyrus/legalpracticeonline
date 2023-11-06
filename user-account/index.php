<!DOCTYPE html>
<html lang="en">

<!-- index-0.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Legal Practice Online -</title>
    <!--  Favicon -->
    <link rel="shortcut icon" href="../img/logo2.png" />

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->

<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/prism/prism.css">


<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">

           <!-- FontAwesome CSS -->
       <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">



       <style type="text/css">
           body{font-family: sans-serif !important;}
       </style>


           <script type="text/javascript">
    //to copy text from referral link textb
    function copy_text(){
        var text = document.getElementById('text');
        text.select();
        document.execCommand("copy");
    }
</script>

</head>



<body class="layout-4" style="background-image: url('BG1.jpg'); background-size:auto;">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div id="app">

    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
    
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa fa-search"></i></button>
                    <div class="search-backdrop"></div>
                  
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa fa-envelope"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Messages
                        <div class="float-right">
                            <a href="#">Mark All As Read</a>
                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-message">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="user.jpg" class="rounded-circle">
                                <div class="is-online"></div>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>North Finance Customer Center</b>
                                <p>Good day, our servers has completed maintenace process.</p>
                                <div class="time">1 min ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="user.jpg" class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>North Finance Investment Unit</b>
                                <p>Hello, we have a new investment plans suitable for you, kindly check it out.</p>
                                <div class="time">3 mins ago</div>
                            </div>
                        </a>
                   
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="fas fa fa-chevron-right"></i></a>
                    </div>
                    </div>
                </li>
            
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="user.jpg" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi,</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Quick Access</div>
                        <a href="profile" class="dropdown-item has-icon"><i class="far fa fa-user"></i> Profile</a>
                        <a href="aidocument.php" class="dropdown-item has-icon"><i class="fa fa-file-text"></i> AI Documents</a>
                        <a href="settings" class="dropdown-item has-icon"><i class="fas fa fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
            <a href="javascript::(void)" id="swal-66" class="dropdown-item has-icon text-danger"><i class="fas fa fa-sign-out"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="home">Legal Practice Online</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.php">LP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Overview</li>
        <li class="dropdown active"><a href="index.php" class="nav-link "><i class="fas fa fa-dashboard"></i><span>Dashboard</span></a> </li>
         <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                     <i class="fa fa-file-text" aria-hidden="true"></i> <div class="d-sm-none d-lg-inline-block"></div><span>Prepare Documents</span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="aidocument.php" class="dropdown-item has-icon"><i class="fa fa-file-text" aria-hidden="true"></i></i>Artficial Intelligence</a>
                        <a href="../manual/manual.php" class="dropdown-item has-icon"><i class="fa fa-file-text" aria-hidden="true"></i> Manual Document</a>
                </li>
         <li class="dropdown"><a href="invest.php" class="nav-link " ><i class="fa fa-file" aria-hidden="true"></i> <span>My Document</span></a> </li>
         <li class="dropdown"><a href="investments.php" class="nav-link " ><i class="fa fa-credit-card" aria-hidden="true"></i><span>Payment Plans</span></a> </li>
         <li class="dropdown"><a href="withdrawals.php" class="nav-link " ><i class="fa fa-comments-o" aria-hidden="true"></i><span>Messages</span></a> </li>
         <li class="dropdown"><a href="transfer-fund.php" class="nav-link " ><i class="fa fa-flag" aria-hidden="true"></i><span>Report Center</span></a> </li>
         <li class="dropdown"><a href="profile.php" class="nav-link " ><i class="fas fa fa-user"></i> <span>Profile</span></a> </li>
         <li class="dropdown"><a href="settings.php" class="nav-link " ><i class="fas fa fa-cog"></i> <span>Settings</span></a> </li>            
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="javascript::(void)" class="btn btn-warning btn-lg btn-block btn-icon-split" id="swal-6"><i class="fas fa fa-sign-out"></i> Logout</a>
                </div>
            </aside>
        </div>


        <!-- Start app main Content -->
        <style>
            .section-header .fa{
                color: #FFA40B;
            }
            .card-icon .fa{
                size: 100%;
                color: #FFA40B;
            }
        </style>
     <script>
        function updateGreeting() {
            const now = new Date();
            const hour = now.getHours();

            let greeting = "Good day";

            if (hour >= 0 && hour < 12) {
                greeting = "Good morning";
            } else if (hour >= 12 && hour < 16) {
                greeting = "Good afternoon";
            } else {
                greeting = "Good evening";
            }

            const greetingElement = document.getElementById("greeting");
            greetingElement.innerHTML = `${greeting} Mr. okeke Obi, Esq, <br> <br><span style="color: #FFA40B;">Welcome to your online Law Office</span> <i class="fa fa-user" aria-hidden="true"></i>`;
        }

        // Call the function when the page loads
        window.addEventListener("load", updateGreeting);

        // Update the greeting every minute
        setInterval(updateGreeting, 60000);
    </script>

    
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1  class="greeting" id="greeting">
  <span style="color: #FFA40B;">Welcome to your online Law Office </span> <i class="fa fa-user" aria-hidden="true"></i>
                    </h1>

                    <style>
                        .row{
                            padding-top: 4%;
                        }
                        .card-header a{
                            text-decoration: none;
                        }
                        .card-header h3{
                            color: black;
                        }
                        .row a{
                            text-decoration: none;
                        }
                    </style>

                </div>
                <div class="row p-100px pt-100px">
                <a href=""><div class="col-lg-3 col-md-6 col-sm-6 col-8 p-100px py-100px">
                   <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa fa-file"></i>
                            </div>
                            <div class="card-wrap py-100% pb-4">
                                <div class="card-header">
                                <h3>10</h3>
                                    <h4>My Document</h4>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <a href=""><div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                           <div class="card-icon bg-success">
                        <i class="far fa fa-file"></i>
                            </div>
                            <div class="card-wrap py-100% pb-4">
                                <div class="card-header">
                                    <h3>10</h3>
                                    <h4>Uploaded Document</h4>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <a href=""><div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                                <i class="far fa fa-file"></i>
                            </div>
                            <div class="card-wrap py-100% pb-4">
                                <div class="card-header">
                                    <h3>10</h3>
                                    <h4>Queried Document</h4>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href=""><div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                            <i class="far fa fa-file"></i>
                            </div>
                            <div class="card-wrap py-100% pb-4">
                                <div class="card-header">
                                <h3>10</h3>
                                    <h4>Approved Document</h4>
                                </div></a>
                            </div>
                        </div>
                    </div>
                
            </section>
        </div>
             <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Notification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Dear <b style=" text-transform: capitalize;"></b> <br>

 <b style="color:red;">Note</b>, Please all Deposits should be made directly to the company Wallet Address (That is system generated wallet). 
      <br>The Company will not be held Responsible if any payment is made outside the system generated Wallet.  <br><br>
       Are you yet to add your withdrawal wallet address? <br>  please click <a href="settings">here</a> to add wallet address for your account.<br>
        <br> 
      <i> Thank You, for your cooperation.</i>  <br> 
     
      </p>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>©Copyright 2009 -<script>document.write(new Date().getFullYear());</script> All rights reserved || Legal Practice
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/apexcharts/apexcharts.min.js"></script>
<script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>


<!-- Page Specific JS File -->
<script src="js/page/index-0.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>


<!-- JS Libraies -->
<script src="assets/modules/sweetalert/sweetalert.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/modules-sweetalert.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/prism/prism.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/bootstrap-modal.js"></script>

<script type="text/javascript">

 //to show modal and prevent it from closing when click outside
    $(document).ready(function(){
$('#exampleModal').modal({
    backdrop: 'static',
    keyboard: false
})
        
    });

</script>


</body>
</html>