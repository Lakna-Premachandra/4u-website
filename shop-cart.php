<?php
session_start();
require_once("database.php");
//print_r($_COOKIE["shopping_cart"]);
//count($_SESSION["cart"]) == 0;


if (isset($_SESSION["search"])) {
  unset($_SESSION["search"]);
}

if (isset($_POST["clear"])) {
  if ($_GET["action"] == "clear") {
    setcookie('shopping_cart', "", time() - (86400));

    echo "<script>window.location = 'shop-cart.php'</script>";
  }
}


if (isset($_POST["remove"])) {
  if ($_GET["action"] == "remove") {

    $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
    $cart_data = json_decode($cookie_data, true);

    //print_r($cart_data);

    foreach ($cart_data as $key => $value) {

      if ($value["product_id"] == $_GET["product_id"]) {
        unset($cart_data[$key]);
        $cart_data = array_values($cart_data);
      }
    }
  }
  $item_data = json_encode($cart_data);
  setcookie('shopping_cart', $item_data, time() + (86400 * 60));
  echo "<script>window.location = 'shop-cart.php'</script>";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>4YouLK</title>
  <link rel="stylesheet" type="text/css" href="cart.css" />
  <script src="hamberger.js" defer></script>
  <script src="More.js" defer></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />


</head>

<body>

  <?php
  require_once("header.php");

  ?>

  <section class="new-cart-container">

    <div class="mobile-container">
      <table id="Mobile-table">

        <tr>
          <th>Product</th>
          <th>Details</th>
          <th>Price</th>

        </tr>

        <?php
        $total = 0.00;
        $acttotal = 0.00;

        if (isset($_COOKIE["shopping_cart"])) {

          $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
          $cart_data = json_decode($cookie_data, true);

          $sql = "SELECT * FROM sub_category
                INNER JOIN product ON sub_category.sub_category_id = product.sub_category_id 
                INNER JOIN product_images ON product.product_id = product_images.product_id";

          $result = mysqli_query($conn, $sql);


          while ($row = mysqli_fetch_assoc($result)) {

            foreach ($cart_data as $key => $value) {

              if ($row["product_id"] == $value["product_id"]) {
                $qty = intval($value["qty"]);
                $actual_price = (doubleval($row["actual_price"]));
                $total_price = (doubleval($row["total_price"]));
                $actxqty = $actual_price * $qty;
                $totalxqty = $total_price * $qty;
                echo "<form action='shop-cart.php?action=remove&product_id=" . $row["product_id"] . "' method='post' class='cart-items'>
              <tr>

               <td id='image-mobile' >
              <img src='images/" . $row["img1"] . "' alt='' id='rofile-pic'><h5>&nbsp;" . $row["product_name"] . "</h5> </td>

              <td id=''><h3>Quantity:$qty</h3><h3>Price: LKR $total_price</h3></td>
              <td id='row'><h3>Total: LKR $totalxqty &nbsp;</h3> <button type='submit' name='remove'><i class='bx bx-x'></i></button></td>
          </tr>      
       </form>";
              }
            }
          }
        }

        ?>

        </table>
      </div>

        <div class="sub-cart-container">


          <table id="cart-table">
            <tr id="table-head">
              <th colspan="0" id="main">Product</th>

              <th>Actual Price</th>
              <th>Our Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <form action='shop-cart.php?action=clear' method=post>
                <th><button id="clear" name="clear">Clear cart</button></th>
              </form>
            </tr>

            <?php
            $total = 0.00;
            $acttotal = 0.00;


            if (isset($_COOKIE["shopping_cart"])) {

              $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
              $cart_data = json_decode($cookie_data, true);



              $sql = "SELECT * FROM sub_category
                INNER JOIN product ON sub_category.sub_category_id = product.sub_category_id 
                INNER JOIN product_images ON product.product_id = product_images.product_id";

              $result = mysqli_query($conn, $sql);


              while ($row = mysqli_fetch_assoc($result)) {

                foreach ($cart_data as $key => $value) {

                  if ($row["product_id"] == $value["product_id"]) {
                    $qty = intval($value["qty"]);
                    $actual_price = (doubleval($row["actual_price"]));
                    $total_price = (doubleval($row["total_price"]));
                    $actxqty = $actual_price * $qty;
                    $totalxqty = $total_price * $qty;

                    echo "<form action='shop-cart.php?action=remove&product_id=" . $row["product_id"] . "' method='post' class='cart-items'>
                <tr id='first'>
                <td id='image' >
                  <img src='images/" . $row["img1"] . "' alt='' id='profile-pic'><h5>&nbsp;" . $row["product_name"] . "</h5></td>
                
                <td><span id='cut'>LKR " . $row["actual_price"] . "</span></td>
                <td>LKR $total_price</td>
                <td> $qty</td>
                <td>LKR $totalxqty</td>
                <td> <button type='submit' name='remove'><i class='bx bx-x'></i></button></td>
                </tr>
                </form>";

                    $acttotal = $acttotal + $actxqty;
                    $total = $total + $totalxqty;
                  }
                }
              }
            }
            $discount = $acttotal - $total;
            ?>
            </table>
          </div>
        </section>


           


 
            <section class="details-sec">
              <br>
              <br>
              <div class="cart-price-details">
                <div class="detail-card">
                  <?php

                  echo "<div class='price-card'>
          <h3>Sub Total</h3>
          <h3> LKR $acttotal/-</h3>
        </div>
        <div class='price-card'>
          <h3>Discount</h3>
          <h3>LKR $discount/-</h3>
        </div>
        <div class='price-card-info'>
          <div class='7-day'>
       
              <h3>Domestic Courier (All Island)</h3>
              <p>Estimated Delivery : 1-3 Working Days Colombo & Suburbs. 3-5 Working Days Outstation.</p>
            </div>
        </div>
        <div class='price-card'>
          <h3 id='h3'>Total</h3>
          <h3><span>LKR $total/-</span></h3>
        </div>
      </div>
    </div>

    <div class='button-check'>
      <a href='index.php'><button>Return to Shop</button></a>
      <a href='checkout.php'><button>Proceed to Chekout</button></a>
    </div>

    </section>";


        ?>



       <?php
      include("footer.html");
    ?>


</body>

</html>