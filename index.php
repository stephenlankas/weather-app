<?php
    require 'connection.php';
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://media.istockphoto.com/vectors/sun-with-sunglasses-smiling-icon-vector-id1162188332?k=20&m=1162188332&s=612x612&w=0&h=29rbsDpEVATE1iN7ACs9TZc5rLtK2f5pocf88lDAGtE=">
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>christine weather app</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>kisia weather app</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">weather app</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                     
                           <?php
                           if(isset($_SESSION['email'])){
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
                  

               </div>
</nav>
<footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy @ christine</a>  All Rights Reserved.</p>
                   <p>This website is developed by christine</p>
               </center>
               </div>
           </footer>
</body>
</html>
