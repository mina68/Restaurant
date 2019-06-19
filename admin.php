<?php
session_start();
if(!isset($_SESSION['admin_id']))
    header('Location:admin_login.php');
?>


<!-DOCTYPE html>
<html>
	<head>
        <title> ADMIN </title> 
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
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/hover.css">
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
        
    
    <!-- start section header-admin -->
        
        <header class="white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> coco </h3>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="last-one"> admin home </h3>
                    </div>
                </div>
            </div>
        </header>
        
    <!-- end section header-admin --> 
        
        
        
    <!-- start section restaurant-tables --> 
        
        <section class="restaurant-tables">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="table white-a-s table1">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 1 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="table white-a-s table2">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon color-1">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 2 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="table white-a-s table3">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon color-2">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 3 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="table white-a-s table4">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon color-3">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 4 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="table white-a-s table5">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon color-3">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 5 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="table white-a-s table6">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon color-2">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 6 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="table white-a-s table7">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon color-1">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 7 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="table white-a-s table8">
                            <input type="hidden" class="order_id" value="">
                            <input type="hidden" class="table_number" value="8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="icon">
                                        <i class="fa fa-table fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p> table | 8 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- end section restaurant-tables --> 
        
        
     <!-- end section tables-order --> 
        
        <section class="tables-order">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="menu-restaurant white-a-s">
                            <h4> Customer Feed </h4>
                            <div class="owl-carousel owl-theme" id="feedback-carousel">

                            </div>
                        </div>
                    </div> 


                    <div class="col-sm-7">
                        <div class="online-order-list white-a-s">
                            <input type="hidden" class="table_number" value="">
                            <input type="hidden" class="order_id" value="">
                            <h4> Order List <span></span> </h4>
                            <table>
                                <thead>
                                    <tr>
                                        <td class="proudct"> proudct </td>
                                        <td> quantity </td>
                                        <td> price </td>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <div class="notes">mkljjjjjjjkljlkjlkjlkj;lj;ljk;kj</div>
                            <button class="finish"> finish </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
     <!-- end section tables-orders --> 
        
        
    <!-- start section  --> 
        
        <section class="outcome">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="info-outcome white-a-s">
                            <i class="fa fa-shopping-basket"></i>
                            <div class="number-sale">
                                <span> orders </span>
                                <h3 class="orders_number"></h3>
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="info-outcome white-a-s">
                            <i class="fa fa-dollar"></i>
                            <div class="number-sale">
                                <span> sales </span>
                                <h3 class="total_paid"></h3>
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="info-outcome white-a-s">
                            <i class="fa fa-money"></i>
                            <div class="number-sale">
                                <span> tibs </span>
                                <h3 class="total_tips"></h3>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        
    <!-- end section  --> 
        
    
        
        
 <!-- start scroll top -->

        <div class="scroll-top">
            <i class="fa fa-arrow-up"></i>
        </div>

 <!-- end  scroll top -->
        
    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/admin.js"></script>
    <script src="js/slide.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

</html>