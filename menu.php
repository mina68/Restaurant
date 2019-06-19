<?php
session_start();
if(!isset($_SESSION['user_id']))
    header('Location:login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Our Menu</title>
    <link rel="stylesheet" href="css/oreder.css">
    <link rel="stylesheet" href="css/navbar.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>
<body>
    <!-- start section navbar -->    
        
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
            <h1>DISCOVER OUR <span>MENU</span></h1>
            <i class="fa fa-angle-double-down" id="goto-bottom-icon"></i>
        </section>
    </header>
    <!--end of header-->

    <!--start of menu-->
    <section class="menu">
        
        
        <section class="our-menu food">
            <div>
                <h2>Food</h2>
                <i class="fa fa-angle-down"></i>
            </div>
        </section>
        <div class="container">
            <section class="our-food food_section">

            </section>
        </div>

        <section class="our-menu food">
            <div>
                <h2>Cocktails</h2>
                <i class="fa fa-angle-down"></i>
            </div>
        </section>
        <div class="container">
            <section class="our-food cocktail_section">
                
            </section>
        </div>

        <section class="our-menu food">
            <div>
                <h2>Desserts</h2>
                <i class="fa fa-angle-down"></i>
            </div>
        </section>
        <div class="container">
            <section class="our-food dessert_section">
                
            </section>
        </div>

        <section class="our-menu food">
            <div>
                <h2>Drinks</h2>
                <i class="fa fa-angle-down"></i>
            </div>
        </section>
        <div class="container">
            <section class="our-food drinks_section">
                
            </section>
        </div>
    </section>
    <!--show popup of the food-->
    <section class="food-popup">
        <div class="container">
            <div class="image">
                <i class="fa fa-window-close"></i>
                <img src="" id="main-image">
                <h3></h3>
            </div>
        </div>
    </section>
    <!--end of menu-->

    <!--JQuery file-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--main js file-->
    <script src="js/nav.js" ></script>
    <script src="js/menu.js"></script>
</body>
</html>