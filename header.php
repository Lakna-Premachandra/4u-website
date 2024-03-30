

<header>

<?php

if (isset($_POST["submit-search"])) {
  $searchitem = $_POST["search"];;
  $_SESSION["search"] = $searchitem;
  
} 
else 
{

}

if (isset($_POST["submit-category"])) {
  $selectedCategory = $_POST["submit-category"];
  $_SESSION["selectedCategory"] = $selectedCategory;
} 
else 
{

}


?>


  
  
      <!--header section with 2 navbars-->
      <div id="header-1" class="header-1">
        <!--navbar-1-->
        <div class="navbar-icon">
          <img src="web.png" alt="" />
          <a href='index.php'><h5 id="u-logo">YOU</h5><a>
          

        </div>
        

        <div class="search">
          <!--Search bar-->
          <form action="search.php" method="post">
          <input
            type="text"
            placeholder="Search items"
            name="search"
            <?php
              // Check if the session variable is set and not empty
              if (isset($_SESSION["search"]) && !empty($_SESSION["search"])) {
                echo 'value="' . $_SESSION["search"] . '"';
              }
            ?>
            required
            id="search-input"
          />
          <button id="search-icon" type="submit" name="submit-search" class="bx bx-search-alt-2"></button>

          </form>
        </div>

        <div class="navbar-list" id="nav">
          <ul class="list">
           
          <?php
            if(isset($_SESSION["user"])){
              echo '<li>
              <a href="account.php"> &nbsp;<i class="bx bxs-user" ></i></a>
              <a id="add" href="account.php">Hello '.$_SESSION["user"]["user_fname"].'!</a>
              </li>';

            }else{
              echo '<li>
              <a href="new-accc.php"> &nbsp;<i class="bx bxs-user" ></i></a>
              <a id="add" href="new-accc.php">Register/ Login</a>
              </li>';
            }
            ?>
            
            
            <li id="notify-1">
              <a  href="shop-cart.php">
                <i class='bx bxs-cart-alt'  ></i>&nbsp;
                <?php 
                    if(isset($_COOKIE["shopping_cart"])) {

                      $cookie_data= stripslashes($_COOKIE["shopping_cart"]);
                      $cart_data= json_decode($cookie_data,true);

                      $count=count($cart_data);
                      echo  "<a id='notify' href=''>$count</a>";

                    }else {
                        echo "<a id='notify' href=''>0</a>";
                    }
                ?> 
                 </a>
              <a id="add" href="shop-cart.php">My cart</a>
            </li>

            <?php
              if(isset($_SESSION["user"])){

                echo'<li>
                <form action="includes/logout.php" method="post">
                  <button id="log-out">Logout</button>
                  </form>
                </li>';

              }
            ?>
            
            
            
          </ul>
        </div>
         
      
      </div>

      <?php 
          // Get the current URL
          $current_url = $_SERVER['REQUEST_URI'];

          $sql = "SELECT * FROM category";

          $result = mysqli_query($conn,$sql);
          $queryResults = mysqli_num_rows($result);

          $active_links[] = "/index.php";

            for($j=1;$j<=$queryResults;$j++) {
              $active_links[] = "/HomeAppliance.php?category_id=$j";
            }
                        
            $active_link = in_array($current_url, $active_links) ? $current_url : 'default.php';



            // Store the active link in the session
            $_SESSION['active_link'] = $active_link;


          echo "<div class='header-sub-nav'>
                <div class='sub-nav'>
                  <ul class='nav-links'>
                  <li><a href='index.php' class='".($_SESSION['active_link'] === '/index.php' ? 'active-2' : '')."'>Home</a></li>";
            
            $i=1;

            // Check if the current URL matches any of your navigation links

                    
            if($queryResults > 0) {

                while (($row = mysqli_fetch_assoc($result))) {


                  echo "<li><a href='HomeAppliance.php?category_id=".$row["category_id"]."' class='". ($_SESSION['active_link'] === "/HomeAppliance.php?category_id=" . $row["category_id"] . "" ? 'active-2' : '') . "'>" . $row["category_name"] . " </a></li>";
                  $i++;

                  if($i==8){
                    break;
                  }

                }

                echo "<div class=''>


                <form action='' method='post' id='myForm'>
                  <select id='more' name='submit-category' onchange='submitFormOnSelect()'>

                    <option id='value' value='index.php' selected >More</option>";
                

                    while ($row = mysqli_fetch_assoc($result)) {
                      
                    $optionValue = "HomeAppliance.php?category_id=".$row["category_id"]."";
                    $isSelected = ($optionValue == $selectedCategory) ? 'selected' : ''; // Check if it's the default option
                          
                    echo "<option id='value' value='$optionValue' $isSelected>".$row["category_name"]."</option>";

                }
                  echo "</option>

                </select>
                </form>
              </div>
            
                  
                </ul>
              </div>
            </div>";




          }
              
        ?>

<script>
  function submitFormOnSelect() {
    var select = document.getElementById('more');
    var selectedValue = select.options[select.selectedIndex].value;
    var form = document.getElementById('myForm');
    form.action = selectedValue;
    form.submit();
  }
</script>
      
      

  <div class="cover-offer">
  <div class="hamburger">
    <i class='bx bx-menu'></i>
  </div>
  <div class="overlay"></div>
  <div class="tem">
    <form action="search.php" method="post">
      <input type="text"
        placeholder="Search items"
        name="search"
        required
        id="search-input">
      <button type="submit" name="submit-search"><i class='bx bx-search'></i></button>
    </form>
  </div>
</div>

    </header>