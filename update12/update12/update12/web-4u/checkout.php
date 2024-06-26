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
    <title>Document</title>
    <link rel="stylesheet" href="checkOut.css" />
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



    <section class="main-cus-data">

        <div class="sub-cus-data">

            <div class="delivery">
                         <div class="first-data">
                            <h1>Add Your Delivery Details</h1>
                            <label for="name">Recipient's Name <span>*</span></label>
                            <input type="text" name="name" required placeholder="Recipient Name">
                            <label for="name">Recipient's Phone No.1 <span>*</span></label>
                            <input type="text" name="name" required placeholder="Mobile No">
                            <label for="name">Recipient's Phone No.2</label>

                            <input type="text" name="name" required placeholder="Recipient No.2">
                            <label for="province">Province <span>*</span></label>
                            <select name="province" id="">Colombo
                            <option value="">colombo</option>
                            <option value="">kadawatha</option>
                            <option value="">kadawatha</option>
                            <option value="">kadawatha</option>
                            <option value="">kadawatha</option>
                            <option value="">kadawatha</option>
                            <option value="">kadawatha</option>
                            <option value="">kadawatha</option>
                            <option value="">kadawatha</option>
                        </select>
                        <label for="province">District <span>*</span></label>
                        <select name="province" id="">Colombo
                        <option value="">colombo</option>
                        <option value="">kadawatha</option>
                        <option value="">kadawatha</option>
                        <option value="">kadawatha</option>
                        <option value="">kadawatha</option>
                        <option value="">kadawatha</option>
                        <option value="">kadawatha</option>
                        <option value="">kadawatha</option>
                        <option value="">kadawatha</option>
                    </select>
                    <label for="province">Town <span>*</span></label>
                    <select name="province" id="">Colombo
                    <option value="">colombo</option>
                    <option value="">kadawatha</option>
                    <option value="">kadawatha</option>
                    <option value="">kadawatha</option>
                    <option value="">kadawatha</option>
                    <option value="">kadawatha</option>
                    <option value="">kadawatha</option>
                    <option value="">kadawatha</option>
                    <option value="">kadawatha</option>
                </select>
                <label for="">Recipient's Address <span>*</span></label>
                <textarea id="address" name="address" rows="4" cols="50" placeholder="House number and Street name "></textarea>
                <label for="">Additional information(Optional)</label>
                <textarea id="address" name="address" rows="4" cols="50" placeholder="Additional Details"></textarea>
                         </div>
                      
            </div>

            <div class="summary">

                <h1 id="topic-order">Order Summary</h1>

                <div class="summary-box">
                    <h1>Product</h1>

                    <div class="boxes">
                        <h3>Smart watch Rs.15000*2</h3>
                        <h3>Rs.30000</h3>
                    </div>
                    <div class="boxes">
                        <h2>Sub Total</h2>
                        <h2>Rs.30000</h2>
                    </div>
                    <div class="boxes box-delivery">
                        <h2>Delivery Charge</h2>
                        <h2>Rs.250</h2>
                    </div>
                    <div class="para-box">
                        <p>Estimated Delivery 1-3 working days Colombo suburbs 3-5 working days outstaion</p>
                        <hr>
                    </div>

                    <div class="boxes">
                        <h2>Total Amount</h2>
                        <h2><span>Rs.30,250</span></h2>
                    </div>
                    <div class="topic-payment-method">
                        <h2>Select Payment Method</h2>
                    </div>
                    <div class="boxes box-card box-card-1">
                        <div class="chekbox-card">
                            <input type="radio" >
                        </div>
                        <div class="card-images">
                            <h2>Credit/Debit Card</h2>
                            <img src="./banners/payhere_short_banner.png" alt="cards">
                            <p>You will be redirected to the Secure Payment Gateway Payhere powered by Sampath Bank PLC to complete the transaction.</p>
                        </div>
                    </div>

                    <div class="boxes box-card box-card-2">
                        <div class="chekbox-card">
                            <input type="radio" >
                        </div>
                        <div class="card-images">
                            <h2>Cash on Delivery</h2>
                            <p>Make the payment in cash to the courier agent at the time of delivery.</p>
                        </div>
                    </div>
                </div>
      
                <div class="agreement">
                <p>Your personal data will only be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="">Privacy Policy.</a></p>
                <div class="agree">
                <input type="checkbox" ><h2>I agree to website <a href="">Terms of Service.*</a></h2>
            </div>
                <button>Place Order</button>
            </div>
        </div>
        </div>

    </section>


    <footer>
        <div  class="footer-card">
          <ul class="list-footer">
            <h2>Contact Us</h2>
            <li><a href="">-Head Office - 155/12, Waththegedara road,
              Maharagama.</a></li>
              <li><a href="">-Customer Care - 0762930440</a></li>
              <li><a href="">-Whatsapp - 0761920440
              </a></li>
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