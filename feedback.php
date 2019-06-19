<?php
session_start();
if(!isset($_SESSION['user_id']))
    header('Location:login.php');
?>

<!-DOCTYPE html>
<html>
	<head>
        <title> Blog </title> 
         <meta charset="utf-8">
            <!-- make IE mtw2f2 m3a bootstrap -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
        <link rel="stylesheet" href="css/animate.css" type="text/css">
        <link rel="stylesheet" href="css/feedback.css">
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
        
        
  <!-- start section bannar -->
        
        <section class="bannar">
            <div class="container">
                <div class="content-bannar">
                    <h2 class="header"> feedback <span> read our clients feedback </span> </h2>
                </div>
            </div>
        </section>
        
  <!-- end section bannar -->
        
        
        
 <!-- start section feedback -->
        
        <section class="feedback">
            <div class="container">
                <div class="content-feedback">
                    <h2 class="header"> feedback <span> read our clients feedback </span> </h2>
                    
                    <button class="show-more">show more</button>

                    <div id="leave" class="leave-message">
                        <h3> Please Let Us Improve Our Service </h3>
                        <div class="warn">
                            <em>X</em>
                            <span></span>
                        </div>
                        <form method="">
                            <input type="text" class="data form-control enter_name" name="" placeholder="Name" required>
                            <span class="client-rate feedback_stars">
                                Your Feedback |
                                <i title="5 stars" class="fa fa-star star-one"></i>
                                <i title="4 stars" class="fa fa-star"></i>
                                <i title="3 stars" class="fa fa-star"></i>
                                <i title="2 stars" class="fa fa-star"></i>
                                <i title="star" class="fa fa-star"></i>
                            </span>
                            <textarea class="form-control data enter_feedback_body" placeholder="feedback ...." required></textarea>
                            <input class="add-cart add_feedback" type="submit" name="" value="send">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        
 <!-- end section feedback -->
        
        
        
 <!-- start section footer -->
        
        <footer class="footer">
            <div class="container">
                <a href="home.html"> <img src="images/5.png" alt="logo"> </a>
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
    <script src="js/feedback.js"></script>
    <script src="js/nav.js"></script>

    
</html>