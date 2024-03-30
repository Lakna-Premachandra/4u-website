<?php
  require_once("includes/config_session.php");
  require_once("includes/login_view.php");

  if(isset($_SESSION["signup_data"])){
    unset($_SESSION["signup_data"]);
    }
if(isset($_SESSION["search"])) {
    unset($_SESSION["search"]);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4YouLK</title>
    <link rel="stylesheet" href="loginform.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <style>
        #eye{
            position: absolute;
            right: 15px;
            transform: translate(0,-50%);
            top: 50%;
            right: 5%;
            cursor: pointer;
            display:flex ;
            align-items: center;
            bottom: 10%;
            transform: translateY(-50%);
            }

    </style>
</head>
<body>

    <div class="container-login-page">

        <a href='index.php'><div class="logo">
            <img src="./banners/4ulk.png" alt="">
        </div>
        </a>

        <form action="includes/login.php" method="post">
        <div class="box-login">
            
            <h1>Welcome to 4You!</h1>
            <h1 id="sign">Sign in</h1>
            <div class="pass-box">
            <!-- <h3>Sign in to 4you or <a id="account" href="new-accc.html">create an account</a></h3> -->
            <input type="text" placeholder="Email" name="email" id="email">
            </div>
            <div class="pass-box">
            <input type="password" placeholder="Password" name="password" id="password" >
            <span id='eye'>
                <i class="fas fa-eye-slash" id="eyeicon" onclick="togglePasswordVisibility()"></i>
            </span>
            </div>
            <div class="forget">
                <a href="">Forget Password</a>
            </div>
            <button id="continue">Sign in</button>
            </form>
            <?php
                check_login_errors();

            ?>
            <hr>
            <button id="google"><img src="./banners/search (5).png" alt="">Continue with google</button>

            <div class="checkbox-box">
               <input type="checkbox">
            <label for="checkbox"><a href="">Stay signed</a></label>
            </div>    
            
            
            <a href="">Learn More ></a>
            
        </div>
        

        
        
        
    </div>

    <script>
        var state = false;
        

        function togglePasswordVisibility() {

            var eyeicon = document.getElementById("eyeicon");
            var passwordInput = document.getElementById("password");

            if (state) {
                passwordInput.setAttribute("type", "password");
                state = false;
                eyeicon.classList.replace( "fa-eye","fa-eye-slash");
            } else {
                passwordInput.setAttribute("type", "text");
                state = true;
                eyeicon.classList.replace( "fa-eye-slash", "fa-eye");
            }
        }
    </script>
    

    


    <div class="create-account">
        <h4>New member ? <a href="new-accc.php">Create Account</a> here</h4>
    </div>

   
</body>
</html> 
