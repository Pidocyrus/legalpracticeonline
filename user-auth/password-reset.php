<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>Legal Practice Online</title>

   <!--  Favicon -->
    <link rel="shortcut icon" href="logonew.png" />
<!-- FontAwesome CSS -->
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">


<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

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

<body class="layout-4" style="background-image: url('bng.jpg');">

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
             
                      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                       <a href="../index.php"> <img src="logonew.png" alt="logo" style="max-width: 200px;" class=""> </a>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4> Account Password Reset </h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">


             
                            <div class="form-group">
    <div class="d-block">
        <label for="new_password" class="control-label">New Password</label>
    </div>
    <div class="input-group">
        <input type="password" class="form-control" id="new_password" name="new_password" required style="background-color: #787980; color: #fff;">
        <div class="input-group-append">
            <span class="input-group-text" id="password-toggle">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div>

     
                                <div class="form-group">
         <button type="submit" name="reset" class="btn btn-success btn-lg btn-block" tabindex="4" style="background-color: #FFA40B;">
                                    RESET PASSWORD
                                    </button>
                                </div>
                            </form>
                          
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center" style="color: #fff">
                        Don't have an account? <a href="sign-up.php">Create One</a>
                    </div>
                    <div class="simple-footer"  style="color: #fff">
                        ©Copyright 2009 -<script>document.write(new Date().getFullYear());</script> All rights reserved || LegalPractice
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
      #password-field {
    position: relative;
    }

     .password-toggle {
    position: absolute;
    right: 30px; /* Adjust the position as needed */
    top: 50%;
    transform: translateY(-40%);
    cursor: pointer;
   }

   /* Add styles for the "eye" icon when the password is visible */
    .password-toggle.active {
    color: #007BFF; /* Change the color as needed */
  }
  </style>

<script>
    const passwordInput = document.getElementById("new_password");
    const passwordToggle = document.getElementById("password-toggle");

    passwordToggle.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
        } else {
            passwordInput.type = "password";
            passwordToggle.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        }
    });
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


</html>