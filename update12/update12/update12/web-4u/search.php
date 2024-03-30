<?php
  session_start();
  require_once("database.php");

  
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="categorystyle.css" />
    <script  src="hamberger.js" defer></script>
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
      require_once("header.php");
      

    ?>
    
    


    <!-- <div class="cover-image">


    </div> -->
  <section id="cart" class="cart">
   
    <div class="bar-topic">
    <?php 

        if(isset($_POST["submit-search"])){
        $search = mysqli_real_escape_string($conn, $_POST["search"]);

        $sql = "SELECT * FROM sub_category
                INNER JOIN product ON sub_category.sub_category_id = product.sub_category_id 
                INNER JOIN category ON sub_category.category_id = category.category_id 
                INNER JOIN product_images ON product.product_id = product_images.product_id  
                WHERE product_name LIKE '%$search%' OR  sub_category_name LIKE '%$search%' OR
                category_name LIKE '%$search%'";

        $result = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($result);

        echo "<h4>There are {$queryResults} results!</h4>";
    ?>

  </div>
    <div class="cart-1">

      
      <!--products-->
      

        <?php
                     
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
        }else {
            echo "There are no results matching your search!";
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

  <!-- <script>

    const filter=document.getElementById("filter")
    const drop=document.getElementById("tap")

    
    filter.addEventListener("click", filterCat);


function filterCat() {
  filter.classList.toggle("active-2");
}


  </script> -->

  
   

  </body>
</html>
