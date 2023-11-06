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
                    <a href="home">Legal Practice Online</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.php">LP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Overview</li>
        <li class="dropdown active"><a href="index.php" class="nav-link "><i class="fas fa fa-dashboard"></i><span>Dashboard</span></a> </li>
         <!-- <li class="dropdown"><a href="deposit.php" class="nav-link " ><i class="fas fa fa-usd"></i> <span>Prepare Documents</span></a> </li> -->
         <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                     <i class="fa fa-file-text" aria-hidden="true"></i> <div class="d-sm-none d-lg-inline-block"></div><span>Prepare Documents</span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a href="aidocument.php" class="dropdown-item has-icon"><i class="fa fa-file-text" aria-hidden="true"></i></i>Artficial Intelligence</a>
                        <a href="manualdocument.php" class="dropdown-item has-icon"><i class="fa fa-file-text" aria-hidden="true"></i> Manual Document</a>
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
        <div class="main-content">
            <section class="section">      
    <div class="section-header">
                           <h1> 
  <span style="color: red;">Available Balance: $</span>
                    </h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#"></a></div>
                    <div class="breadcrumb-item">Balance History</div>
                </div>
            </div>
   


             
                <div class="row">
               <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Balance Summary</h4>
                                <div class="card-header-action">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Value</th>
                                        </tr>
                                        </thead>
                                        <tbody>    
                                   

                                             <tr>
                                            <td>Available Balance </td>
                                            <td></td>
                                        </tr>                     
                                        <tr>
                                            <td>Total Deposit </td>
                                            <td></td>
                                        </tr>
                                           <tr>
                                            <td>Total Withdrawal </td>
                                            <td></td>
                                        </tr>
                                     
                                                     <tr>
                                            <td>Total Referral Bonus</td>
                                            <td></td>
                                        </tr>
                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Payments History</h4>
                                <div class="card-header-action">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                          
                                            <th >#</th>
                                            <th >Date</th>
                                             <th >Service</th>
                                            <th >Amount</th>
                                              <th >Mode</th>
                                              <th >Status</th>
                                        </tr>
                                        </thead>
                                         <tbody >
                                

                                        <tr>
                                
                                    <td></td>
                                   <td></td>
                                    <td>?></td>
                            <td> </td>
                             <td class="text-info"></td>
                                    <td class="text-danger"></td>
                                    </tr>
                                     '<td colspan="10"> <a href="deposit" class="btn btn-primary">You have no Payments history yet, Kindly click to deposit ! </a> </td>';
                                    
                                  
                                   
                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     <div class="card-body">
                        <a href="payments-invoice" class="btn btn-block btn-success">View Payments Invoice   </a>
                                </div>


                        <div class="card-body">
 <div class="alert alert-info"><b>Note:</b> This is overall sumarry of all your successful deposit and withdrawal transactions in the system.
<br> kindly send us a mail if not convinced on the balance summary shown. </div>
                                </div>

                    </div>
                </div>

             
       
  

            </section>
        </div>

    



        
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>©Copyright 2009 -<script>document.write(new Date().getFullYear());</script> All rights reserved || Auto Trades
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