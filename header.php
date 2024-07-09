<?php
session_start();
extract($_REQUEST);
error_reporting(0);
include "dbconfig.php";
$username = $_SESSION['login_username'];
$userid = $_SESSION['login_id'];
$useremail = $_SESSION['login_email'];
?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="images/ico/favicon.png">
      <title>VEND</title>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
      <script src="js/modernizr.custom.js"></script>
      <link rel='stylesheet' id='google_font_Open_Sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic&#038;subset=latin%2Cvietnamese%2Cgreek%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%2Cgreek-ext' type='text/css' media='all' />
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
      <style>
         .navbar-brand { margin-top: 15px !important; color: black !important; font-weight: 600; }
          .navbar-brand img {width: 120px;}
      </style>
   </head>
   <body>
      <!-- start header -->
      <div class="header sticky-navigation">
         <div class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
               </div>
               <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li class="active"><a href="index.php">Home</a></li>
                    <!-- <li><a href="#">Notifications</a></li> -->
                     <li><a href="#">Contact</a></li> 
                     <li><a href="#">About</a></li>
                     <?php if(!isset($_SESSION['login_username'])){ ?>
                        <li><a href="login.php">Login</a></li>
                    <?php } else { ?>
                     <li><a href="logout.php">Logout</a></li>
                    <?php } ?>
                  </ul>
               </div>
               <!--/.nav-collapse -->
            </div>
         </div>
      </div>
      <!-- end header -->