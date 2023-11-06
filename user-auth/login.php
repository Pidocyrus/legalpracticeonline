<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110vh;
            margin: 0;
            width: 100%;
            background-image: url('BG1.jpg');
        }
        .container {
            max-width: 700px; /* Adjust this value as needed */
            padding: 30px; /* Adjust padding as needed */
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 110%;
        }
        h2 {
            text-align: center;
            color:#FFA40B;
            padding-bottom: 30px;
        }
        a {
           text-decoration: none;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #225658;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #FFA40B;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color:#FFA40B;
        }
        .login-option {
            text-align: center;
            padding-bottom: 20px;
        }
        .login-option button {
            margin: 0 5px;
            padding: 10px 20px;
            background-color: #ccc;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .login-option button.active {
            background-color:#FFA40B;
            color: #fff;
        }
        .signup,button {
            background-color: #FFA40B;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .signup button a{
            display: inline-block;
            color: #fff; 
            text-align: center;
            align-items: center;
            width: 100%;
            align-content: center;
        }
        .back-button {
            display: block;
            text-align: center;
            background-color: #ccc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
        }
        .back-button:hover {
            background-color:#008000;
            color: #fff;
        }
        /* .signup,button:hover{} */
    </style>
</head>
<body>
    <div class="container">
    <div class="login-brand">
     <a href="../index.php"> <img src="logonew.png" alt="logo" style="max-width: 200px;" class=""> </a>
                    </div>
        <h2>Log-in to your Account</h2>
        <form id="loginForm">
            <div class="login-option">
                <button type="button" class="active" data-option="username">Username</button>
                <button type="button" data-option="email">Email</button>
                <button type="button" data-option="phone">Phone Number</button>
                <button type="button" data-option="id">Supreme Court Number</button>
            </div>

            <div class="field" id="usernameField">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>

            <div class="field" id="emailField" style="display:none;">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="field" id="phoneField" style="display:none;">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="field" id="idField" style="display:none;">
                <label for="id">Supreme Court Number:</label>
                <input type="text" id="id" name="id">
            </div>

            <div class="password-field">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <i class="fas fa-eye password-toggle" id="password-toggle"></i>
            </div>
            
            
            <input type="submit" name="submit" value="Login">
        </form>
        <p class="login-option"><a href="forgot-password.php">Forgot Password?</a></p>
        <div class="signup" style="text-align: center;">
        <a href="sign-up.php" style="text-align: center; display: block; text-decoration: none; color: #fff;"><button type="button" data-option="id">
        New to Us? Signup
    </button></a>
</div>
   <!-- Back Button -->
   <a href="../index.php" class="back-button">Back</a>
    </div>

           </div>

      <!-- sttyle for the fa-eye -->
    <style>
      .password-field {
    position: relative;
    }

     .password-toggle {
    position: absolute;
    right: 10px; /* Adjust the position as needed */
    top: 60%;
    transform: translateY(-50%);
    cursor: pointer;
   }

   /* Add styles for the "eye" icon when the password is visible */
    .password-toggle.active {
    color: #007BFF; /* Change the color as needed */
  }
  </style>

<script>
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("password2");
    const passwordToggle = document.getElementById("password-toggle");
    const confirmPasswordToggle = document.getElementById("password-toggle2");

    passwordToggle.addEventListener("click", function () {
        togglePasswordVisibility(passwordInput, passwordToggle);
    });

    confirmPasswordToggle.addEventListener("click", function () {
        togglePasswordVisibility(confirmPasswordInput, confirmPasswordToggle);
    });

    function togglePasswordVisibility(inputField, toggleIcon) {
        if (inputField.type === "password") {
            inputField.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            inputField.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }
</script>
    

    <script>
        const optionButtons = document.querySelectorAll(".login-option button");
        const inputFields = document.querySelectorAll(".field");

        optionButtons.forEach(button => {
            button.addEventListener("click", () => {
                optionButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");

                const selectedOption = button.getAttribute("data-option");
                inputFields.forEach(field => {
                    field.style.display = field.id === `${selectedOption}Field` ? "block" : "none";
                });
            });
        });

        // Initially show the username field as active
        optionButtons[0].click();
    </script>
   
    </body>
</html>
</body>
</html>
