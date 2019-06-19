<?php
session_start();

if(isset($_SESSION['admin_id']))
    header('Location:admin.php');
?>

<!-DOCTYPE html>
<html>
	<head>
        <title> Login </title> 
         <meta charset="utf-8">
            <!-- make IE mtw2f2 m3a bootstrap -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" >
        <link rel="stylesheet" href="css/animate.css" type="text/css">
        <link rel="stylesheet" href="css/home.css">
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
    
    <body class="body">
        
    
    <!-- start section login -->  
        
        <section class="login text-center"> 
            <h1> login </h1>
            <form method="POST">
                <input class="form-control user-login name" type="text" name="name" placeholder="Admin Name">
                <span class="warn warn1"></span>
                <input class="form-control user-login password" type="password" name="password" placeholder="Password">
                <span class="warn warn2"></span>
                <div class="submit">
                    <input class="form-control login_submit" type="submit" name="" value="Login">
                </div>
            </form>
        </section>
        
    <!-- end  section login -->

    
    </body>
    
    
    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
	<script src="js/admin_login.js" ></script>
    
</html>
