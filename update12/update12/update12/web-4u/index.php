<?php
  session_start();
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
    <title>Document</title>
    <link rel="stylesheet" href="index.css" />
    <script src="https://unpkg.com/@swup/fade-theme@2"></script>
    <script  src="swup.js" defer></script>
     
    <script  src="hamberger.js" defer></script>
    <script  src="More.js" defer></script>
    




    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
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
      require_once("header.php");

    ?>
    
    
    

    <section class="cover">

      <div class="cover-image">
  

  
      
      </div>
    </section>
    <section class="information-container">

      <div class="information">

        <div class="info-box">
          <h1><i id="remix" class="ri-truck-line"></i></h1>
          <h2>Flat Delivery Rates</h2>
          <h4>Only Rs.240/- for Any Weight. All Island.</h4>
        </div> <div class="info-box">
          <h1><i id="remix" class="ri-money-dollar-circle-line"></i></h1>
          <h2>Cash on Delivery</h2>
          <h4>Pay upon Receiving Your Order.</h4>
        </div>  <div class="info-box">
          <h1><i id="remix" class="ri-bank-card-line"></i></h1>
          <h2>Secure Payments</h2>
          <h4>via PayHere Powered by Sampath Bank.</h4>
        </div> <div class="info-box">
          <i id="remix" class="ri-file-shield-fill"></i>
          <h2>
            14 Day Exchanges</h2>
          <h4>Ordered Wrong Size. No Problem.</h4>
        </div>
      </div>
    </section>

    <section class="offer-container">

      <div class="offer-sub-container">

        <div id="box-1" class="offer-box">
          <div id="sub-1" class="sub-box">
            <div class="account-box">
            <?php
            if(isset($_SESSION["user"])){

              echo '<a href="new-accc.php"><button  id="register">Register</button></a> <a href="account.php"><button>Account</button></a>';

            }else{

              echo '<a href="new-accc.php"><button  id="register">Register</button></a> <a href="loginform.php"><button>Sign in</button></a>';
            }
            ?>
              
              <h1>Or continue with</h1>
              <div class="social-box">
               <a href=""> <i class='bx bxl-google' ></i></a>
               <a href=""><i class='bx bxl-facebook' ></i></a>
               <a href=""> <i class='bx bxl-twitter' ></i></a>
               <a href=""> <i class='bx bxl-apple' ></i></a>
              </div>
            </div>
          </div>
          <div id="sub-2" class="sub-box">
            <img src="./category-images/sales1.png" alt="">
          </div>
        </div>
        <div id="box-2" class="offer-box">
          <div id="sub-5" class="sub-box">
            <h1>Explore Our New Prodcuts</h1>

            <div class="carousel" data-carousel>
              <button class="carousel-button prev" data-carousel-button="prev">
                <!-- &#8656; --><i class='bx bxs-left-arrow'></i>
              </button>
              <button class="carousel-button next" data-carousel-button="next">
                <!-- &#8658; --><i class='bx bxs-right-arrow'></i>
              </button>
              <ul data-slides>
                <li class="slide" data-active>
                  <img
                    src="./banners/homepod-select-midnight-202210.png"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./banners/MT1F3.png"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./banners/MT203.png"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./banners/MU7T2_GEO_US.png"
                  />
                </li>
                <li class="slide">
                  <img
                    src="./banners/MYMG2.png"
                  />
                </li>
              </ul>
            </div>
          </div>

        </div>
        <div id="box-3" class="offer-box">
          <div id="sub-3" class="sub-box">

            <div class="carousel-sub">
            </div>
          </div>
          <div id="sub-4" class="sub-box">
            <div  class="carousel-sub-slide"></div>
          </div>
        </div>
      </div>
    </section>
    
   

     <section class="catergory-container">

      <h1>Shop By Catergory</h1>
      <div class="catergory-sub-container">
      <a href='HomeAppliance.php?category_id=1'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c2.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Home Appliances</h1>
          </div>
        </div></a>     
        <a href='HomeAppliance.php?category_id=2'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c4.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Sanitary</h1>
          </div>
        </div></a>    
        
        <a href='HomeAppliance.php?category_id=3'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c6.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Education</h1>
          </div>
        </div></a>    
        <a href='HomeAppliance.php?category_id=6'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c1.jpg " alt="">
          </div>
          <div class="name-box">
            <h3>Fashion</h1>
          </div>
        </div></a>    
        <a href='HomeAppliance.php?category_id=7'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c3.webp" alt="">
          </div>
          <div class="name-box">
            <h3>Entertaintment</h1>
          </div>
        </div></a>    
        <a href='HomeAppliance.php?category_id=5'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c5.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Energy Savings</h1>
          </div>
        </div></a>    
        <a href='HomeAppliance.php?category_id=9'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c7.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Vehicle Accessories</h1>
          </div>
        </div></a>  
        <a href='HomeAppliance.php?category_id=4'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c8.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Electronics</h1>
          </div>
        </div></a>
        <a href='HomeAppliance.php?category_id=8'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c9.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Mobile Accessories</h1>
          </div>
        </div></a>     
        <div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c10.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Security</h1>
          </div>
          
        </div>

        <a href='HomeAppliance.php?category_id=10'><div class="catergories-box">

          <div class="image-box">
            <img src="./banners/c11.jpg" alt="">
          </div>
          <div class="name-box">
            <h3>Air Conditioners</h1>
          </div>
          
        </div></a>
       
          
        </div>
       
        </div>
       


    

    </section>

    <section id="cart" class="cart">

      <h1>Popular Products</h1>
      <!--main cart -->
      <!--section-2-->
      <!-- <div class="topic">
        <h1>Top selling ></h1>
      </div> -->
      
      <div class="cart-1">
        <?php
          $sql = "SELECT * FROM product
                  INNER JOIN product_images ON product.product_id = product_images.product_id 
                  WHERE popular = 'Yes' ";
                   
          
          $result = mysqli_query($conn,$sql);
          $queryResults = mysqli_num_rows($result);
                     
            if($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo 
                       "<a href='item-view.php?product_id=".$row["product_id"]."'><div  class='cards'>
                        <img src='images/".$row["img1"]."' alt='' />
                        <div class='card-data'>
                        <h1 >".$row["product_name"]."</h1>
                        <h3>LKR ".$row["total_price"]."/-</h3>
                        <h2><span id='discount'>".$row["actual_price"]."</span> | <span>".$row["discount"]."/- OFF</span> </h2>
                        <h5>Free Delivery</h2>
                        </div>
                        <i class='bx bx-cart-alt' ></i>
                        </div> </a>";

                }
            }
        ?>


      
        
       
   
      </div>
    </section>
  
    
    <footer>
      <div  class="footer-card">
        <ul class="list-footer">
          <h2>Contact Us</h2>
          <li><a href="">-Head Office - 155/12, Waththegedara road,
            Maharagama.</a></li>
            <br>
         
            
        </ul>
        <ul class="list-footer">
          <h2>Help Center</h2>
          <li><a href="">-Help Center</a></li>
          
        </ul>
         
          <ul class="list-footer">
          <h2>Customer Services</h2>
          <li><a href="">-Wholesale packages for dealers</a></li>
          <li><a href="">-CCTV Cameras installation</a></li>
          <li><a href="">-AC installation & Services</a></li>
          <li><a href="">-Exporting</a></li>

            
            </ul>
            <div id="social" class="list-footer">
              <li>
                <a href=""><i id="bx" class='bx bxs-location-plus'></i></a>
              </li>
              <li>
                <a href=""><i id="bx" class="bx bxl-facebook-circle"></i></a>
              </li>
              <li>
                <a href=""><i id="bx" class="bx bxl-instagram-alt"></i></a>
              </li>
              <li>
                <a href=""><i id="bx" class='bx bxl-tiktok'></i></a>
              </li>
              <li>
                <a href=""><i id="bx" class="bx bxl-whatsapp"></i></a>
              </li> 
              
            </div>
          </div>
        <div class="copyright">

          <div class="copy-para">
            <a href="">- Information Legal Enquiry Guide ©️2010-2023 4YOU.com. All rights reserved -</a>
          </div>

          <div class="payment">
            <a href=""><img src="./banners/580_visa.jpg" alt=""></a>

            <a href=""><img src="./banners/payhere_brand-1024x341.png" alt=""></a>
            <a href=""><img src="./banners/png-clipart-paypal-logo-brand-font-payment-paypal-text-logo.png" alt=""></a>
            <a href=""><img src="./banners/png-transparent-logo-american-express-payment-computer-icons-brand-american-express-blue-text-rectangle.png" alt=""></a>
            <a href=""><img src="./banners/Mastercard_2019_logo.svg.png" alt=""></a>
          </div>
        </div>
      
      

      <!-- <div class="payment">

        <ul class="payment">
          <li><a href=""><img src="" alt=""></a></li>
        </ul>
      </div> -->


    </footer>
    <script>
      const buttons = document.querySelectorAll("[data-carousel-button]");

    
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
