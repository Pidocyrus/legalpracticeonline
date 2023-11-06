<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>LegalPracticeOnline - Digitalizing the legal practice Online</title>

   <!--  Favicon -->
    <link rel="shortcut icon" href="logonew.png"/>

      <!-- Page Loader -->
      <div class="page-loader-wrapper">
                <span class="loader"><span class="loader-inner"></span></span>
            </div>


<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href=">assets/css/components.min.css">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<style type="text/css">
   .selectric, .form-control{background-color:#e5efea !important;}
</style>

    <script type="text/javascript">
        function vpass(){
  pass = document.getElementById('password').value;
  cpass = document.getElementById('password2').value;
//to compare the two password
   if(pass != cpass){
   document.getElementById('passerr').innerHTML = 'The Password Field does not match'
   $('#oa_btn').attr('disabled', 'disabled');
        }else{
    document.getElementById('passerr').innerHTML = ' '
    $('#oa_btn').removeAttr('disabled');
    }
}
</script>

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
    border: 2px solid #888;
    width: 100%;
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
    background-color:#FFA40B;
;
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

<body class="layout-4" style="background-image: url('BG1.jpg'); background-size:auto;">

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                    <a href="../user-account/aidocument.php"> <img src="logonew.png" alt="logo" style="max-width: 150px;" class=""> </a>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h2>FORM FOR TENANCY AGREEMENT</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                           <div class="form-group">
                                    <label for="email">Full Name of Landlord/Landlord's Attorney:</label>
                                    <input  type="text" class="form-control" name="fullname" required="" autofocus >
                                    <div class="invalid-feedback">
                                    </div>
                                <label for="email">Address of Landlord/Landlord's Attorney:</label>
                                    <input  type="text" class="form-control" name="fname" required=""  autofocus>
                                    <div class="invalid-feedback">
                                    </div>

                                    <label for="email">FullName of Tenant:</label>
                                    <input  type="text" class="form-control" name="othername" required="" autofocus >
                                    <div class="invalid-feedback">
                                    </div>
                                    <label for="date">Address of The Land:</label>
                                    <input  type="text" class="form-control" name="date" required="" autofocus >
                                    <div class="invalid-feedback">
                                    </div>
                                    <label for="date">Gender:</label>
                                    <input  type="text" class="form-control" name="gender" required="" autofocus >
                                    <div class="invalid-feedback">
                                    </div>
                                    <div class="row">
                                    <div class="form-group col-12">
                                        <label>Specification Of Property:</label>
                                        <select class="form-control selectric" name="country" required="" autofocus>
                <option value="Afghanistan">Self Contain</option>
                <option value="Åland Islands">One Bedroom</option>
                <option value="Albania">Two Bedroom</option>
                <option value="Algeria">Three Bedroom</option>
                <option value="American Samoa">Duplex</option>
                <option value="Andorra">Others</option>
                                        </select>
                                    </div>
                                </div>
                        <div class="form-group">
                                    <label for="email">Commencement Date:</label>
                                    <input id="date" type="date" class="form-control" name="date" required="">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Expiration Date:</label>
                                    <input id="email" type="date" class="form-control" name="email" required="">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Consideration Amount:</label>
                                    <input id="amount" type="text" class="form-control" name="amount" required="">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Duration of The Tenancy:</label>
                                        <input type="text" class="form-control"  name="tennancy" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Rent Purpose:</label>
                                        <select class="form-control selectric" name="country" required="" autofocus>
                <option value="Afghanistan">Commercial</option>
                <option value="Åland Islands">Residencial</option>
                                        </select>
                                    </div>
                                </div>
                                      <div class="row">
                                    <div class="form-group col-12">
                                        <label for="bankname" class="d-block" >Bank Name of the Landlord/Landlord's Attorney:</label> 
                                         <input id="password" type="text" name="password" class="form-control" name="bankname" required="">
                                       
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="accountname" class="d-block">Account Name of the Landlord/Landlord's Attorney:</label>
                                        <input id="password2" type="text" class="form-control" name="password-confirm" required="" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Accont NO. Of The Landlord/Landlord's Attorney:</label>
                                        <input type="number" class="form-control" name="accountno" required="" >
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Duration Of Statutory Notice:</label>
                                        <input type="text" class="form-control"  name="duration" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="addition">Any Additional Covenant:</label>
                                   <textarea id="addition" class="form-control" name="addition" rows="5" required></textarea>
                                           <div class="invalid-feedback"></div>
                                                  </div>
                                                  <div class="row">
                                            <div class="form-group col-6">
            <a href="../user-account/aidocument.php" class="btn btn-success" style="background-color:  #FFA40B;">BACK</a>
                                </div>
                                <div class="form-group col-6">
            <button type="submit" name="register" disabled="" id="oa_btn" class="btn btn-success btn-lg btn-block" style="background-color:  #FFA40B;">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                        <div class="mt-5 text-muted text-center" style="color: #225658">
                        already have an account? <a href="login.php">Login</a>
                    </div>
                    <div class="simple-footer" style="color: #225658;" >
                         ©Copyright 2009 -<script>document.write(new Date().getFullYear());</script> All rights reserved || Legal Practice Online
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/auth-register.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>
</html>