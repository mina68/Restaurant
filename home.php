<?php
session_start();
if(!isset($_SESSION['user_id']))
    header('Location:login.php');
?>

<!-DOCTYPE html>
<html>
	<head>
        <title> home </title> 
         <meta charset="utf-8">
            <!-- make IE mtw2f2 m3a bootstrap -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
                                <!-- Owl Carousel Assets -->  
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
        <link rel="stylesheet" href="css/animate.css" type="text/css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/media.css">
        <link href="css/font1.css" rel="stylesheet">
        <link href="css/font2.css" rel="stylesheet">


             <!-- if de bttnfz bs 3la IE -->
          <!--[if lt IE 9]-->
             <!--  da by5le IE y2ra elments bt3 html5 ex header , nav , section, ...... -->
          <script src="js/html5shiv.min.js"></script>
             <!--  da by5le IE y2ra media queiry w y7l ae m4akl fe mediaqueiry fe IE  tt7l -->
          <script src="js/respond.min.js"></script>
        <!--[endif]-->
	</head>
    
    
    <body>
        
    
    <!-- start section navbar -->    
        
        <nav class="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="home.html"> <img src="images/logo.png" alt="logo"> </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="menu">
                            <ul class="list-unstyled">
                                <li> <a href="home.php"> Home </a> </li>
                                <li> <a href="menu.php"> menu </a> </li>
                                <li> <a href="#"> about </a> </li>
                                <li> <a href="feedback.php"> feedback </a> </li>
                                <li> <a href="contact%20us.html"> Contact </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="about">
                            <i class="fa fa-shopping-cart fa-2x shop-basket"> </i> 
                            <span class="shop"> 1 </span>
                        </div>
                    </div>
                </div>
                <div class="shopping-cart-content">
                    <ul class="list-unstyled">

                    </ul>
                </div>
            </div>
        </nav>
        
  <!-- end section navbar -->
        
        
 <!-- start section put-feedback -->   
        
        <section class="give-feedback">
            <form method="">
                <h3> your feedback </h3>
                <div class="warn">
                    <em>X</em>
                    <span>lklklklkl</span>
                </div>
                <input class="input-field enter_name" type="text" name="" value="" placeholder="Your Full Name" required>
                <div class="btn-open-feedback">
                    feedback
                    <i class="fa fa-commenting-o"></i>
                </div>
                <ul class="list-unstyled feedback_stars">
                    <li>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                    </li>
                </ul>
                <textarea required class="input-field enter_feedback_body"  placeholder="Please Give Your Feedback"></textarea>
                <input  class="send add_feedback" type="submit" name="" value="Send feedback">
            </form>
        </section>
        
 <!-- end section put-feedback   -->    
        

 <!-- start section slider  -->        
        
        <div class="slider">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="images/1.jpg">
                    <div class="layer-1">
                        <h3  data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown" class="h2 sec-font"> coco for you </h3>
                        <h2 data-animation-in="rollIn" data-animation-out="animate-out rollOut" class="sec-font">
                            best food waiting you
                        </h2>
                        <p data-animation-in="rollIn" data-animation-out="animate-out rollOut"> 
                            coco is a restaurant, bar and coffee roastery located on Egypt. every thing you need we have here 
                        </p>
                        <a href="our%20menu.html" class="more-info" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">
                            see menu 
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/2.jpg">
                    <div class="layer-2">
                        <h3 class="h2 sec-font" data-animation-in="flipInY" data-animation-out="animate-out fadeOutUp"> coco for you </h3>
                        <h2 class="sec-font" data-animation-in="flipInX" data-animation-out="animate-out fadeOutLeft"> 
                            real cooking, perfect taste
                        </h2>
                        <p data-animation-in="flipInX" data-animation-out="animate-out fadeOutLeft"> 
                            coco is a restaurant, bar and coffee roastery located on Egypt. every thing you need we have here
                        </p>
                        <a href="our%20menu.html" class="more-info" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                            see menu 
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/3.jpg">
                    <div class="layer-3">
                        <h3 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp" class="h2 sec-font"> coco for you </h3>
                        <h2 class="sec-font" data-animation-in="slideInRight" data-animation-out="animate-out fadeOut">
                            we service amazing food 
                        </h2>
                        <p data-animation-in="slideInRight" data-animation-out="animate-out fadeOut"> 
                            coco is a restaurant, bar and coffee roastery located on Egypt. every thing you need we have here 
                        </p>
                        <a href="our%20menu.html" class="more-info" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">
                            see menu
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
<!-- end section slider -->
        
        
<!-- start section our features -->
        
        <section class="our-features">
            <div class="container">
                <h2 class="header"> our <span> features </span> </h2>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="features">
                            <i class="fa fa-credit-card fa-3x"></i>
                            <h3> secure payment </h3>
                            <p> via popular payment systems or with a plastic card. </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="features">
                            <i class="fa fa-check-circle-o fa-3x"></i>
                            <h3> High Quality food </h3>
                            <p> best and fresh food you have ever taste </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="features">
                            <i class="fa fa-sticky-note-o fa-3x"></i>
                            <h3> 24/7 Customer Care </h3>
                            <p> ur Customer Care Managers will always help you. </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="features">
                            <i class="fa fa-thumbs-o-up fa-3x"></i>
                            <h3> 100% Satisfaction </h3>
                            <p> In case you are not satisfied with the purchased product, we’ll change it to another one for free. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!-- end section our features -->
        
        
<!-- start section our menu -->
        
        <section class="our-menu">
            <div class="container">
                <h2 class="h1 sec-font"> order from <a href="menu.php"> menu </a> </h2>
            </div>
        </section>
        
<!-- end section our menu -->
        
        
<!-- start section overlay-menu -->
        
        <section class="overlay-menu">
            <div class="container">
                <ul class="tap-menu-bar list-unstyled">
                    <li class="select-element active-tap-menu-bar">
                        <img src="images/6.png" alt="tap menu bar">
                        <span> Food </span>
                    </li>
                    <li class="select-element">
                        <img src="images/7.png" alt="tap menu bar">
                        <span> Drinks </span>
                    </li>
                    <li class="select-element">
                        <img src="images/8.png" alt="tap menu bar">
                        <span> Dessert </span>
                    </li>
                    <li class="select-element">
                        <img src="images/9.png" alt="tap menu bar">
                        <span> Cocktail </span>
                    </li>
                </ul>
                <div class="restaurant-menu">
                    <div class="food">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled before">

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="middle-menu">
                                    <div class="menu-pic">
                                        <img class="img-responsive" src="images/11.jpg">
                                    </div>
                                    <a href="menu.php" title="full menu" class="sec-font"> full menu </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled after">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------- drinks section ----------------------------------- -->
                    <div class="drinks">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled before">
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="middle-menu">
                                    <div class="menu-pic">
                                        <img class="img-responsive" src="images/43.jpg">
                                    </div>
                                    <a href="menu.php" title="full menu" class="sec-font"> full menu </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled after">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------- dessert section ----------------------------------- -->
                    <div class="dessert">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled before">
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="middle-menu">
                                    <div class="menu-pic">
                                        <img class="img-responsive" src="images/45.png">
                                    </div>
                                    <a href="menu.php" title="full menu" class="sec-font"> full menu </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled after">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------- cocktail section ----------------------------------- -->
                    <div class="cocktail">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled before">
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="middle-menu">
                                    <div class="menu-pic">
                                        <img class="img-responsive" src="images/42.jpg">
                                    </div>
                                    <a href="menu.php" title="full menu" class="sec-font"> full menu </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="menu-content">
                                    <ul class="list-unstyled after">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!-- end section overlay-menu -->
        
        
        
        
<!-- start section Testimonials -->
        
        <section class="testimonials">
            <div class="container">
                <h2 class="header"> testimonials <span> our guestbook </span> </h2>
                <div class="owl-carousel owl-theme owl-testimonials" id="feedback-carousel">

                </div>
            </div>
        </section>
        
<!-- end section Testimonials -->
        
        
<!-- start section our chefs -->
        
        <section class="our-chefs">
            <div class="container">
                <h2 class="header"> our talented <span> chefs </span>  </h2>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="chef">
                            <div class="chef-pic">
                                <img src="images/13.jpg" alt="our chef picture">
                            </div>
                            <div class="info-chef">
                                <h3 class="sec-font"> <a href=""> walter samuel </a>  </h3>
                                <span> ceo & founder </span>
                                <div class="social-chef">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-pinterest "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="chef">
                            <div class="chef-pic">
                                <img src="images/15.jpg" alt="our chef picture">
                            </div>
                            <div class="info-chef">
                                <h3 class="sec-font"> <a href=""> todd carter </a>  </h3>
                                <span> master chef </span>
                                <div class="social-chef">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-pinterest "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="chef">
                            <div class="chef-pic">
                                <img src="images/16.jpg" alt="our chef picture">
                            </div>
                            <div class="info-chef">
                                <h3 class="sec-font"> <a href=""> angel yammi </a>  </h3>
                                <span> head of chefs </span>
                                <div class="social-chef">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-pinterest "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="chef">
                            <div class="chef-pic">
                                <img src="images/14.jpg" alt="our chef picture">
                            </div>
                            <div class="info-chef">
                                <h3 class="sec-font"> <a href=""> david casper </a>  </h3>
                                <span> chef assistant </span>
                                <div class="social-chef">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-pinterest "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!-- end section our chefs -->
        
        
<!-- start section blog-posts -->
        
        <section class="blog-posts">
            <div class="container">
                <h2 class="header"> wait us <span> for new foods </span> </h2>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="name-blog.html">
                            <div class="blog-section">
                                <div class="blog-img">
                                    <img src="images/21.jpg" alt="blog picture">
                                </div>
                                <div class="info-blog-section">
                                    <h2 class="sec-font"> <a href=""> icecream with coco </a>   </h2>
                                    <p> 
                                        I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted...
                                    </p>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        4 apri 2017
                                    </span>
                                     <em class="read-more sec-font"> coming soon </em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="name-blog.html">
                            <div class="blog-section middle-section">
                                <div class="blog-img">
                                    <img src="images/22.jpg" alt="blog picture">
                                </div>
                                <div class="info-blog-section">
                                    <h2 class="sec-font"> <a href=""> icecream with coco </a>   </h2>
                                    <p> 
                                        I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted...
                                    </p>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        4 apri 2017
                                    </span>
                                     <em class="read-more sec-font"> coming soon </em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="name-blog.html">
                            <div class="blog-section">
                                <div class="blog-img">
                                    <img src="images/23.jpg" alt="blog picture">
                                </div>
                                <div class="info-blog-section">
                                    <h2 class="sec-font"> <a href=""> icecream with coco </a>   </h2>
                                    <p> 
                                        I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted...
                                    </p>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        4 apri 2017
                                    </span>
                                    <em class="read-more sec-font"> coming soon </em>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
<!-- end section blog-posts -->
        
        
<!-- start section footer -->
        
        <footer class="footer">
            <div class="container">
                <a href="home.html"> <img src="images/logo.png" alt="logo"> </a>
                <p class="p"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam iaculis lorem augue, at quam finibus eget. </p>
                <div class="row">
                    <div class="col-sm-6 right">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2> we are open </h2>
                                <ul class="list-unstyled time-open">
                                    <li>
                                        <span>monday</span>
                                        <span>10AM - 9PM</span>
                                    </li>
                                    <li>
                                        <span>tuesday</span>
                                        <span class="closed">closed</span>
                                    </li>
                                    <li>
                                        <span>wednesday</span>
                                        <span>10AM - 9PM</span>
                                    </li>
                                    <li>
                                        <span> thursday</span>
                                        <span>8AM - 12AM</span>
                                    </li>
                                    <li>
                                        <span> friday </span>
                                        <span>8PM - 9AM</span>
                                    </li>
                                    <li>
                                        <span> Saturday</span>
                                        <span>10AM - 9PM</span>
                                    </li>
                                    <li>
                                        <span>sunday</span>
                                        <span>10AM - 9PM</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <div class="our-address">
                                    <h2> our address </h2>
                                    <p>22 Alnahas Building, 2 AlBahr St, Tanta Al-Gharbia bondoka, Egypt</p>
                                    <a href=""> order </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="find-us">
                                    <h2> find us </h2>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href=""> <i class="fa fa-facebook facebook"></i> </a> 
                                        </li>
                                        <li>
                                            <a href=""> <i class="fa fa-twitter twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href=""> <i class="fa fa-instagram instagram"></i> </a>
                                        </li>
                                        <li>
                                            <a href=""> <i class="fa fa-pinterest pinterest"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-us">
                                    <h2> contact us </h2>
                                    <p>Main Email: coco@coco.com</p>
                                    <p>Phone: 02 01065370701</p>
                                    <form method="">
                                        <input type="email" name="" value="" placeholder="E-mail" required>
                                        <input type="submit" name="" value="send">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
<!-- end section footer -->
        
        
        
<!-- end section copyright -->
        
        <section class="copyright">
            <div class="container">
                Copyright &copy; 2018  All Rights Reserved by <span> coco </span> 
            </div>
        </section>
        
<!-- end section copyright -->
        
        
 <!-- start scroll top -->

        <div class="scroll-top">
            <i class="fa fa-arrow-up"></i>
        </div>

 <!-- end  scroll top -->
        
    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/nav.js" ></script>
    <script src="js/home.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/slide-testimonials.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    
</html>