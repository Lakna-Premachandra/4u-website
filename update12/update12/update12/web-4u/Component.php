<?php

function cartElement($productimg,$productname,$productprice,$productid) {
    $element="
    <form action='shop-cart.php?action=remove&product_id=$productid' method='post' class='cart-items'>
        <div class='cart-details'>
            <div class='cart-card'>
                <div class='product'>
                <img src='images/$productimg' alt='' />
                </div>
                <div class='product-details'>
                <div class='product-name'>
                    <h1 id='name'>$productname</h1>
                    <div class='product-name'>
                    <h2><span id='cut'>$400 </span> &nbsp;&nbsp;$productprice</h2>
                    <!-- <h2><span>Quantity -</span>25</h2> -->
                    <div class='quantity-container'><button>+</button><h1>25</h1><button>-</button></div>
                
                </div>

                <div class='product-discount'>
                </div>
                <div class='product-button'>
                    <button name='remove'>Remove</button>
                    <h2><span>Total -</span> $productprice</h2>
                </div>
                </div>
            </div>
            </div>          
        </form>
    
    ";
    echo $element;



}













?>