<?php
session_start();
if(!isset($_SESSION['user_id']))
    header('Location:login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/navbar.css">
    <!--font awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo box1">
                        <a href="#"><img src="images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="menu">
                        <ul class="list-unstyled box2">
                            <li> <a href="home.php"> Home </a> </li>
                            <li> <a href="menu.php"> menu </a> </li>
                            <li> <a href="#"> about </a> </li>
                            <li> <a href="feedback.php"> feedback </a> </li>
                            <li><a href="contact%20us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box3 about">
                        <i class="fa fa-shopping-cart fa-2x shop-basket"></i>
                        <span class="shop">1</span>
                    </div>
                </div>
            </div>
            <!--start of shoping cart-->
            <div class="shopping-cart-content">
                <ul class="list-unstyled">
                        
                </ul>
            </div>
        </div>
    </nav>
        
  <!-- end section navbar -->

    <!--start of header-->
    <header>
        <section class="text">
            <h1>CHECKOUT <span>NOW</span></h1>
        </section>
    </header>
    <!--end of header-->

    <!--start of chechout-->
    <section class="checkout">
        <div class="container">

            <section>
                <form>
                    <div>
                        <label for="first-name">Your Name</label>
                        <input class="credit_name" type="text" name="" placeholder="Your Name" required>
                    </div>
                    <div>
                        <label for="table-number">Credit Number</label>
                        <input class="credit_number" type="text" name="" value="" placeholder="credit Number" required>
                    </div>
                    <div>
                        <label for="table-number">Credit Password</label>
                        <input class="credit_password" type="password" placeholder="Credit Password" name="" value="" required>
                    </div>
                    <div>
                        <label for="table-number">Credit Expire</label>
                        <input class="credit_expire" type="date" name="" placeholder="Credit Expire" required>
                    </div>
                    <div>
                        <label for="order-notes">Order Notes</label>
                        <textarea class="notes" placeholder="If You Have Any Note About You Order !! Please Write Here.." name="order notes" id="order-notes"></textarea>
                    </div>
                    <div>
                        <h3>Payment</h3>
                        <label for="way2pay">
                        <input type="radio" value="way2pay" name="Payment Method" id="way2pay" required>
                        <span><i class="fa fa-check"></i></span> Way2Pay
                        </label>
                        <label for="paypal"><input type="radio" value="PayPal" name="Payment Method" id="paypal" required><span><i class="fa fa-check"></i></span> PayPal</label>

                        <div class="warn">
                            <div class="head">
                                <em>X</em>
                                <span></span>
                            </div>
                        </div>
                        <input class="checkout_submit" type="submit" value="CHECKOUT">
                    </div>
                </form>

                <div class="order-details">
                    <div>
                        <h3>Order Details</h3>

                        <!-- the items will be shown here -->

                        <div class="tibs">
                            <p> If you want pay tips <span> click here </span> </p>
                            <div class="content-tibs">
                                <input type="number" class="tips_input" placeholder="Put Your Tips" required>
                                <button title="Pay Tibs" class="pay-tips"> Done </button>
                            </div>
                        </div>
                        <hr>
                        <div class="total_checkout">
                            <p>Total </p><span> 0 $</span>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
    <!--end of chechout-->

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/checkout.js"></script>
 
</body>
    
</html>
