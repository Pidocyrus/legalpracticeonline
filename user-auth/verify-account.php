
<?php
$url = explode("/",$_SERVER['QUERY_STRING']);
//to check if the page entered in url exits
if (file_exists($url[0]. '.php')){
   require_once($url[0]. '.php');
}else{
  header("location:login");
}




$url_length = sizeof($url);
if($url_length > 1){
    header("location:".base()."404");// or redirect to 404 page
}

require_once '../north-admin/dboperations.php';
$obj = new dboperations;


//to check if user is logged in
if(!isset($_SESSION["email"])  ){
    header("location:../home");
}







if(isset($_POST['confirm'])){

$email = $_SESSION["email"];

$v_code = $_POST['cd1'].$_POST['cd2'].$_POST['cd3'].$_POST['cd4'];

  $msg = $obj->verifyAccount($email,$v_code);
    if($msg){
 
 header("location:verify-successful");
  }else{
               echo '<div id="myModal" class="modal2" style="display:block">

  <div class="modal2-content">
    <div class="modal2-header" style="background-color:#1e265a">
      <h2  style="color:white">North Finance</h2>
    </div>
    <div class="modal2-body">
    <br>
    <p>Account Verification Failed. Invalid Verification Code.</p>
     <small style="color:red;">Please contact support@north-finance.com</small>
   <br>
    </div>
    <div class="modal2-footer" style="background-color:#1e265a">
    <a href="login" class="btn btn-danger" id="close" style="background-color:#898d97">OK</a>
    </div>
  </div>

</div>
';
  }

}



  


?>


<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>North Finance - Capital for creativity and innovation</title>

   <!--  Favicon -->
    <link rel="shortcut icon" href="favicon.png" />

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">

<style type="text/css">


  
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 10; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal2-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}


.modal2-header {
    padding: 2px 16px;
    background-color: #09304d;
    color: white;
}

.modal2-body {padding: 2px 16px;}

.modal2-footer {
    padding: 2px 16px;
    background-color: #09304d;
    color: white;
}

</style>
</head>

<body class="layout-4">
    
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                     <a href="#"> <img src="logo2.png" alt="logo" style="max-width: 200px;" class=""> </a>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Verify Account</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Enter Code Received in Mail to verify account</p>
                            <form method="POST">
                                 <div class="row">
                                <div class="form-group">
                                    <label for="email">Verification Code</label> <br>
                <input id="cd1" size="1" maxlength="1" onkeyup="jump(this, 'cd2')" autofocus="" type="text"  name="cd1"  required >
                <input id="cd2" size="1" maxlength="1" onkeyup="jump(this, 'cd3')" type="text"  name="cd2"  required>
                <input id="cd3" size="1" maxlength="1" onkeyup="jump(this, 'cd4')" type="text"  name="cd3"  required>
                <input id="cd4" size="1" maxlength="1" onkeyup="jump(this, 'cd5')" type="text"  name="cd4"  required>
                                </div>
                            </div>
                                <div class="form-group">
                    <button type="submit" name="confirm" class="btn btn-primary btn-lg btn-block" tabindex="4" style="background-color: #fbb21e">
                                    Validate Code
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                               ©Copyright 2009 -<script>document.write(new Date().getFullYear());</script> All rights reserved || North Finance
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    window.onload = function(){
cd1.value = "";
cd2.value = "";
cd3.value = "";
cd4.value = "";
}

    function jump(field, autoMove){
        if(field.value.length >= field.maxLength){
            document.getElementById(autoMove).focus();
        }
    }

</script>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- auth-forgot-password.html  Tue, 07 Jan 2020 03:39:47 GMT -->
</html>