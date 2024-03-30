<?php
session_start();
require_once("database.php");
//print_r($_SESSION["cart"]);
//count($_SESSION["cart"]) == 0;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4YouLK</title>
    <link rel="stylesheet" href="myorder.css" />
    <script src="hamberger.js" defer> </script>
    <script  src="More.js" defer></script>

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
  <?php
      include("header.php");
    ?>




    <section class="my-order-main">
      <!-- <div class="profile"> -->
        <!-- <h2>My Account</h2>
        <div class="user-name">
        <img src="./banners/user (1).png" alt="user"> -->
          
        <!-- <div class="user-name-1">
        <h3>Hi</h3>
        <h3>Ashane@123gmail.com</h3>
      </div> -->
      <!-- <div class="orders">
        <a href="myorder.html"><button id="order-active" >My Orders</button></a>
        <a href="account.html"><button >My Profile</button></a>
      </div>
        </div> -->
        
      </div>

        <div class="my-order-sub">

            <h1>My Orders</h1>
            <table>
                <tr>
                  
                  <th>Order ID</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                  <th>Shipping</th>
                  <th>Total</th>
                  <th>Ordered Date</th>
                  <th>Order Status</th>
                  <th></th>
                </tr>

                <?php
                  $user_id= mysqli_real_escape_string($conn,$_SESSION["user"]["user_id"]);

                  $sql = "SELECT * FROM order_table
                  WHERE user_id = $user_id";

                  $result = mysqli_query($conn,$sql);
                  $queryResults = mysqli_num_rows($result);
                              
                  if($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr >
                            <td>".$row["order_id"]."</td>
                            <td>".$row["qty"]."</td>
                            <td>".$row["sub_total"]."</td>
                            <td>".$row["shipping"]."</td>
                            <td>".$row["total"]."</td>
                            <td>".$row["ordered_date"]."</td>
                            <td>".$row["order_status"]."</td>
                            <td><a style='text-decoration: underline;' href=''>print</a></td>
                          </tr>  
                          <tr >";
                    }
                  }                 

                ?>

  
                </table>
                <div class="orders">
                  <a href="myorder.php"><button id="order-active">My Orders</button></a>
                  <a href="account.php"><button>My Profile</button></a>
                </div>
                <!-- <div class="button-bar">
                    <a href=""><button >My Profile</button></a>
                    <a href=""><button id="me">My Orders</button></a>
                </div> -->
        </div>
        <!-- <div class="profile-pic"> -->
          <!-- <h2>My Account</h2>
          <div class="user-name">
          <img src="./banners/user (1).png" alt="user"> -->
            
          <!-- <div class="user-name-1">
          <h3>Hi</h3>
          <h3>Ashane@123gmail.com</h3>
        </div> -->
        <!-- <div class="orders">
          <a href="myorder.html"><button id="order-active">My Orders</button></a>
          <a href="account.html"><button>My Profile</button></a>
        </div> -->
          <!-- </div> -->
          
        </div>
    </section>


    <?php
      include("footer.html");
    ?>