
<?php
    require_once('links.php');

    require_once('Header.php');
?>
<body>



<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
   

    <!-- Header Section Start -->
    <div class="header-section section">
       
        <!-- Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Header Top Wrapper Start -->
                        <div class="header-top-wrapper">
                            <div class="row">

                                <!-- Header Social -->
                                <div class="header-social col-md-4 col-12">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>

                                <!-- Header Logo -->
                                <div class="header-logo col-md-4 col-12">
                                    <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
                                </div>

                                <!-- Account Menu -->
                                <div class="account-menu col-md-4 col-12">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span class="num">2</span></a>
                                            
                                            <!-- Mini Cart -->
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <!-- Cart Products -->
                                                <div class="all-cart-product clearfix">
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.html"><img src="img/cart/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.html">Holiday Candle</a></h5>
                                                            <p>1 x £9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.html"><img src="img/cart/2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.html">Christmas Tree</a></h5>
                                                            <p>1 x £9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Cart Total -->
                                                <div class="cart-totals">
                                                    <h5>Total <span>£12.00</span></h5>
                                                </div>
                                                <!-- Cart Button -->
                                                <div class="cart-bottom  clearfix">
                                                    <a href="checkout.html">Check out</a>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Header Top Wrapper End -->

                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Bottom Start -->
        <!-- Header Bottom End -->
        
    </div><!-- Header Section End -->
    
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>Cart</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Cart Section Start-->
    <div class="cart-section section pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <div class="table-responsive mb-30">
                        <table class="table cart-table text-center">
                            
                            <!-- Table Head -->
                            <thead>
                                <tr>
                                    <th class="number">#</th>
                                    <th class="image">image</th>
                                    <th class="name">product name</th>
                                    <th class="qty">quantity</th>
                                    <th class="price">price</th>
                                    <th class="total">totle</th>
                                    <th class="remove">remove</th>
                                </tr>
                            </thead>
                            
                            <!-- Table Body -->
                            <tbody>
                                <tr>
                                    <td><span class="cart-number">1</span></td>
                                    <td><a href="#" class="cart-pro-image"><img src="img/product/1.jpg" alt="" /></a></td>
                                    <td><a href="#" class="cart-pro-title">Holiday Candle</a></td>
                                    <td><div class="product-quantity">
                                        <input type="text" value="0" name="qtybox">
                                    </div></td>
                                    <td><p class="cart-pro-price">$104.99</p></td>
                                    <td><p class="cart-price-total">$104.99</p></td>
                                    <td><button class="cart-pro-remove"><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                                <tr>
                                    <td><span class="cart-number">2</span></td>
                                    <td><a href="#" class="cart-pro-image"><img src="img/product/2.jpg" alt="" /></a></td>
                                    <td><a href="#" class="cart-pro-title">Christmas Tree</a></td>
                                    <td><div class="product-quantity">
                                        <input type="text" value="0" name="qtybox">
                                    </div></td>
                                    <td><p class="cart-pro-price">$85.99</p></td>
                                    <td><p class="cart-price-total">$85.99</p></td>
                                    <td><button class="cart-pro-remove"><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                       
                        <!-- Cart Action -->
                        <div class="cart-action col-lg-4 col-md-6 col-12 mb-30">
                            <a href="#" class="button">Continiue Shopping</a>
                            <button class="button">update cart</button>
                        </div>
                        
                        <!-- Cart Cuppon -->
                        <div class="cart-cuppon col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Discount Code</h4>
                            <p>Enter your coupon code if you have</p>
                            <form action="#" class="cuppon-form">
                                <input type="text" placeholder="Cuppon Code">
                                <button class="button">apply coupon</button>
                            </form>
                        </div>
                        
                        <!-- Cart Checkout Progress -->
                        <div class="cart-checkout-process col-lg-4 col-md-6 col-12 mb-30">
                            <h4 class="title">Process Checkout</h4>
                            <p><span>Subtotal</span><span>$190.98</span></p>
                            <h5><span>Grand total</span><span>$190.98</span></h5>
                            <button class="button">process to checkout</button>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!-- Cart Section End-->    




    <?php
    require_once('Footer.php');
    ?>

    

</div><!-- Main Wrapper End -->


</body>
<?php

    require_once('js-links.php');
?>

</html>