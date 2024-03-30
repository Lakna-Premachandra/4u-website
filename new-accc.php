<?php

  require_once("includes/config_session.php");
  require_once("includes/signup_view.php");

  if(isset($_SESSION["search"])) {
    unset($_SESSION["search"]);

  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4YouLK</title>
    <link rel="stylesheet" href="new-acc.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>

    <div class="container-login-page">

    <a href='index.php'><div class="logo">

        <img src="./banners/4ulk.png" alt="" />

      </div></a>
      <form action="includes/signup.php" method="post">
      <div class="box-login">

        <h1>Create Your 4You Account</h1>
        <!-- <h3>Have an acc<a id="account" href="Login.html"> sign in</a></h3> -->
        
       <?php signup_inputs() ?>
          
        

      </div>



        <p>
          By Creating an account,
          you agree to our User Agreement and acknowledge reading our User
          Privacy Notice .
        </p>
        <button type="submit" id="continue">Create Account</button>
        </form>

        <div><?php
          check_signup_errors();

        ?></div>


        <hr />

        <button id="google"><img src="./banners/search (5).png" alt="">Continue with google</button>
        
      </div>
      


    

    

    </div>
    
    <div class="create-account">
      <h4>Already a member ? <a href="loginform.php">Sign in</a> </h4>
  </div>




  </body>
</html>