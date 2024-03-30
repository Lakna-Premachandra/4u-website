<?php
  session_start();
  require_once("database.php");
  $buttonText="";
  $qty="";
  $cart_data = array();

  if(isset($_SESSION["search"])) {
    unset($_SESSION["search"]);

  }
  
  if(isset($_POST["add"])) {

    $qty = $_POST["qty"];

     if(isset($_COOKIE["shopping_cart"])) {

        $cookie_data= stripslashes($_COOKIE["shopping_cart"]);
        $cart_data= json_decode($cookie_data,true);

        $item_array_id=array_column($cart_data,"product_id");

        if(in_array($_POST["product_id"],$item_array_id)){

          foreach($cart_data as $key => $value) {
            if($value["product_id"]==$_GET["product_id"]) {
              unset($cart_data[$key]);
              $cart_data = array_values($cart_data);
              $buttonText="remove";

              
            }
                      
          }
          
        }else {
          $buttonText="add";

          $count=count($cart_data);
          $item_array=array (
              "product_id"=>$_POST["product_id"],"qty"=>$_POST["qty"]
          );
          $cart_data[] = $item_array;
         
        }

        
    }else {

        $item_array=array ("product_id"=>$_POST["product_id"],"qty"=>$_POST["qty"]
        );
        
        //Create new session variable
        $cart_data[] = $item_array;
        //print_r($_SESSION["cart"]);
       
    }
    $item_data = json_encode($cart_data);
    setcookie('shopping_cart', $item_data, time() + (86400 * 60));

    echo "<script>window.location = 'item-view.php?product_id=".$_GET["product_id"]."'</script>";
  }
  else {

    if(isset($_COOKIE["shopping_cart"])) {

      $cookie_data= stripslashes($_COOKIE["shopping_cart"]);
      $cart_data= json_decode($cookie_data,true);


      $item_array_id=array_column($cart_data,"product_id");

        if(in_array($_GET["product_id"],$item_array_id)){
          
          foreach($cart_data as $key => $value) {
            if($value["product_id"]==$_GET["product_id"]) {

              $qty = $value["qty"];
              $buttonText="add";

            }
                     
          }
          
        }else {
          $buttonText="remove";
          $qty = 1;

        }

    }else {
        $qty=1;
        $buttonText="remove";

    }
    
  }

    
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4YouLK</title>
    <link rel="stylesheet" type="text/css" href="itemview.css" />
    <script defer src="hamberger.js"> </script>
    <script defer src="More.js"></script>

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
      require_once("header.php");

    ?>


    <section class="item-select">
      
    <?php
       
       $id= mysqli_real_escape_string($conn, $_GET["product_id"]);
 
       $sql = 
               "SELECT * FROM product
               INNER JOIN product_images ON product.product_id = product_images.product_id
               WHERE product.product_id = $id";
       $result = mysqli_query($conn,$sql);
 
 
       $row = mysqli_fetch_assoc($result);
        $sub_category_id=$row["sub_category_id"];
       
 
       echo "<div class='item-frame'>
     
             <div class='carousel' data-carousel>
               <button class='carousel-button prev' data-carousel-button='prev'>
                 <i class='bx bxs-left-arrow'></i>
               </button>
               <button class='carousel-button next' data-carousel-button='next'>
                 <i class='bx bxs-right-arrow'></i>
               </button>
               <ul data-slides>
                 <li class='slide' data-active>
                   <img
                     src='images/".$row["img1"]."'
                   />
                 </li>";
                 if(!$row["img2"]==null){
                 echo "<li class='slide'>
                   <img
                     src='images/".$row["img2"]."'
                   />
                 </li>";
                 }
                 if(!$row["img3"]==null){
                 echo "<li class='slide'>
                   <img
                     src='images/".$row["img3"]."'
                   />
                 </li>";
                 }
                 if(!$row["img4"]==null){
                 echo "<li class='slide'>
                   <img
                     src='images/".$row["img4"]."'
                   />
                 </li>";
                 }
                 if(!$row["img5"]==null){
                 echo "<li class='slide'>
                   <img
                     src='images/".$row["img5"]."'
                   />
                 </li>";
                 }
                 if(!$row["img6"]==null){
                  echo "<li class='slide'>
                  <img
                    src='images/".$row["img6"]."'
                  />
                </li>";

                 }
                
              echo " </ul>
             </div>
       
             
            <form action='item-view.php?product_id=".$row["product_id"]."' method='post'>
             <div class='item-details'>
             
             <h1>".$row["product_name"]."</h1>
             <h2 id='price'><span>LKR ".$row["actual_price"]."/-</span>&nbsp; LKR ".$row["total_price"]."/-</h2>

                <div class='button-price'>
                  <div id='button-quantity' class='button-quantity'>
                  <button id='decrementButton'>-</button>
                  <h4 id='numberElement'>$qty</h4>
                  <button id='incrementButton'>+</button>
                  <input type='hidden' name='qty' id='qty' value='$qty'>
                  
                 
               </div>
              
               
               <button type='submit' id='add-to-cart' name='add' onclick='toggleButtonText()'>
                <a id='button-text'>";
                if ( $buttonText === "add") {
                  echo 'Remove from cart';
                } else {
                  echo 'Add to cart';
                };
                echo "</a>
               </button>
               <input type='hidden' name='buttonState' id='buttonState' value='$buttonText'>
               <input type='hidden' name='product_id' value=".$row["product_id"].">
               
               
   
               <ul>
                 <li>Delivery within 24 hours</li>
                 <li>Low cost islandwide delivery</li>
                 <li>".$row["stock"]."</li>
               </ul>
               <ul>
                 <li>
                 ".$row["product_description"]."
                 </li>
               </ul>
             </div>
             
             
             </div>
             </form>
           </div>";
       
           
 
            
        
    ?>


<script>
function initializeQuantity(qty) {
    const decrementButton = document.getElementById("decrementButton");
    const incrementButton = document.getElementById("incrementButton");
    const numberElement = document.getElementById("numberElement");
    const qtyInput = document.getElementById("qty");
    const button = document.getElementById("button-text");

    let number = qty; // Initial value

    

    const toggleButtons = (enabled) => {
    decrementButton.disabled = enabled;
    incrementButton.disabled = enabled;
    
    // If buttons are disabled, prevent hover and clicks
    if (enabled) {
      decrementButton.style.pointerEvents = "none";
      incrementButton.style.pointerEvents = "none";
    }
  };

    // Function to update the number and the display
    const updateNumber = () => {
      numberElement.textContent = number; // Update the displayed quantity
      qtyInput.value = number; // Update the hidden input field with the current quantity
    };

    // Add event listeners for the buttons
    decrementButton.addEventListener("click", (event) => {
    if (button.textContent === "Add to cart") {
      event.preventDefault(); // Prevent the default form submission
    }

    if (number > 1) {
      number--;
      updateNumber();
    }
  });

  incrementButton.addEventListener("click", (event) => {
    if (button.textContent === "Add to cart") {
      event.preventDefault(); // Prevent the default form submission
    }

    number++;
    updateNumber();
  });

    // Initial display
    updateNumber();

    toggleButtons(button.textContent === 'Remove from cart');
    
  }

  // Call the function with the initial quantity
  initializeQuantity(<?php echo $qty; ?>);


</script>



    </section>

   

    <div class="main-container">
      <h1 id="topic-su">Related Products</h1>
<div class="container-suggestions">

<?php

$sql = "SELECT * FROM sub_category
                INNER JOIN product ON sub_category.sub_category_id = product.sub_category_id 
                INNER JOIN product_images ON product.product_id = product_images.product_id 
                WHERE sub_category.sub_category_id = $sub_category_id ";
          

        $result = mysqli_query($conn,$sql);
        $queryResults = mysqli_num_rows($result);
                   
          if($queryResults > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

                  echo "<a href='item-view.php?product_id=".$row["product_id"]."'><div class='products-su'>
                        <img src='images/".$row["img1"]."' alt=''>
                        <h1>".$row["product_name"]."</h1>
                        <h2>LKR ".$row["total_price"]."/-</h2>
                        </div></a>";


              }
          }
      ?>
  <script src="numberManipulation.js"></script>

  
</div>
</div>

<?php
      include("footer.html");
    ?>

    <script>
      const buttons = document.querySelectorAll("[data-carousel-button]");

      // const hamburger = document.querySelector(".hamburger");

      // const list = document.querySelector(".header-sub-nav");

      // hamburger.addEventListener("click", mobileMenu);

      // function mobileMenu() {
      //   list.classList.toggle("active");
      // }
      buttons.forEach((button) => {
        button.addEventListener("click", () => {
          const offset = button.dataset.carouselButton === "next" ? 1 : -1;
          const slides = button
            .closest("[data-carousel]")
            .querySelector("[data-slides]");

          const activeSlide = slides.querySelector("[data-active]");
          let newIndex = [...slides.children].indexOf(activeSlide) + offset;
          if (newIndex < 0) newIndex = slides.children.length - 1;
          if (newIndex >= slides.children.length) newIndex = 0;

          slides.children[newIndex].dataset.active = true;
          delete activeSlide.dataset.active;
        });
      });
    </script>
  </body>
</html>
