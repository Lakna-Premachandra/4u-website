<?php
  require_once("includes/config_session.php");
  require_once("includes/editacc_view.php");
  require_once("database.php");

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4YouLK</title>
    <link rel="stylesheet" href="accstyle.css" />
    <script defer src="hamberger.js"></script>
    <script defer src="More.js"></script>
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
 
   
  </head>
  <body>
    
    <?php
      include("header.php");
    ?>



    <section class="main-account">

    <div class="profile">
          <h1>My Account</h1>
          <div class="user-name">
          <img src="./banners/user (1).png" alt="user">
            
          <div class="user-name-1">
          <h1>Hi</h1>
          <?php
            echo'<h2>'.$_SESSION["user"]["user_fname"].' '.$_SESSION["user"]["user_lname"].'!</h2>';
          ?>
        </div>
        <div class="orders">
        <a href="account.php"><button id="order-active">My Profile</button></a>
        <a href="myorder.php"><button >My Orders</button></a>

      </div>
          </div>
        </div>


        <div class="sub-account">
            <div class="account-box">

              <div class="profile-topic">
                <h1>Profile</h1>
              </div>
              <form action="includes/editacc.php" method="post">
              <div class="account-box-1">
                
                <?php  
                                   
                 editacc_data();
                
                ?>
                  
                </div>
                <div class="profile-topic">
                  <h1>Change Password</h1>
                </div>
                <div class="account-box-1">

                  <div class="profile-box">
                  <label for="name">Current Password</label>
                  <input type="password" name="current_password" placeholder="Current Password">
                </div>
                <div class="profile-box">
                  <label for="name">New Password</label>
                  <input type="password" name="new_password" placeholder="New Password">
                </div>
                <div class="profile-box">
                  <label for="name">Confirm Password</label>
                  <input type="password" name="confirm_password" placeholder="Confirm Password">
                </div>
                 
                </div>
             

                <div class="save">
                  <button type="submit">Save Changes</button>
                </div>
                </form>
            </div>
          
          
        </div>
        <?php
              check_edit_account_errors();

        ?>
        <div class="profile-pic">
        <h1>My Account</h1>
          <div class="user-name">
          <img src="./banners/user (1).png" alt="user">
            
          <div class="user-name-1">
          <h1>Hi</h1>
          <?php
            echo'<h2>'.$_SESSION["user"]["user_fname"].' '.$_SESSION["user"]["user_lname"].'!</h2>';
          ?>
        </div>
        <div class="orders">
        <a href="account.php"><button id="order-active">My Profile</button></a>
        <a href="myorder.php"><button >My Orders</button></a>

      </div>
          </div>
          
        </div>


    </section>
    <?php
      include("footer.html");
    ?>

  </body>
</html>

    
    