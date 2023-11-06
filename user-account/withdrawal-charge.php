<!DOCTYPE html>
<html lang="en">

<!-- index-0.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Legal Practice Online</title>
    <!--  Favicon -->
    <link rel="shortcut icon" href="favicon.png" />

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


 



</head>

<body class="layout-4">
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
                                <b>UK MARKETS Customer Center</b>
                                <p>Good day, our servers has completed maintenace process.</p>
                                <div class="time">1 min ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="user.jpg" class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>UK MARKETS Investment Unit</b>
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
                        <a href="invest" class="dropdown-item has-icon"><i class="fas fa fa-usd"></i> Invest</a>
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
                    <a href="home">North Finance</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="home">NF</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
        <li class="dropdown "><a href="home" class="nav-link "><i class="fas fa fa-dashboard"></i><span>Dashboard</span></a> </li>
         <li class="dropdown "><a href="deposit" class="nav-link " ><i class="fas fa fa-usd"></i> <span>Deposit</span></a> </li>
         <li class="dropdown"><a href="invest" class="nav-link " ><i class="fas fa fa-save"></i> <span>Invest</span></a> </li>
         <li class="dropdown"><a href="investments" class="nav-link " ><i class="fas fa fa-bank"></i> <span>Investments</span></a> </li>
         <li class="dropdown active"><a href="withdrawals" class="nav-link " ><i class="fas fa fa-usd"></i> <span>Withdrawals</span></a> </li>
         <li class="dropdown"><a href="transfer-fund" class="nav-link " ><i class="fas fa fa-share"></i> <span>Transfer Fund</span></a> </li>
         <li class="dropdown"><a href="referral" class="nav-link " ><i class="fas fa fa-users"></i> <span>Referral</span></a> </li>
              <li class="dropdown"><a href="balance" class="nav-link " ><i class="fas fa fa-briefcase"></i> <span>Balance</span></a> </li>
                   <li class="dropdown"><a href="profile" class="nav-link " ><i class="fas fa fa-user"></i> <span>Profile</span></a> </li>
                <li class="dropdown"><a href="settings" class="nav-link " ><i class="fas fa fa-cog"></i> <span>Settings</span></a> </li>
                 <li class="dropdown"><a href="stock-market" class="nav-link " ><i class="fas fa fa-list-alt"></i> <span>Stock Market</span></a> </li>
              
          
          
                             
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="javascript::(void)" class="btn btn-primary btn-lg btn-block btn-icon-split" id="swal-6"><i class="fas fa fa-sign-out"></i> Logout</a>
                </div>
            </aside>
        </div>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">      
    <div class="section-header">
                           <h1> 
  <span style="color: red;">Avaliable Balance: $span>
                    </h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#"></a></div>
                    <div class="breadcrumb-item">Withdrawals</div>
                </div>
            </div>
   


             
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                               <div class="card">
                                <div class="card-header">
                                    <h4>Withdrawal Charge</h4>
                                </div>
                                <div class="card-body">
                                 <p> Withdrawal Requested Successfully </p>
                                  <p>Amount Placed: $></p>
            <p>Withdrawal Charge:  $(10% of Amount Placed.)</p>
                                  <p>Total Amount to Receieve : $</p>

                                </div>
                                <div class="card-footer text-right">
                                    <a href="withdrawals" class="btn btn-primary">Okay</a>
                                </div>
                            </div>

                               
                    </div>
         
                </div>
       
  

            </section>
        </div>



        
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>©Copyright 2009 -<script>document.write(new Date().getFullYear());</script> All rights reserved || North Finance
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

<!-- index-0.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>