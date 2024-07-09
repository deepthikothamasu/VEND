<?php 
session_start();
extract($_REQUEST);
include('../dbconfig.php');
//error_reporting(0);

if(!isset($_SESSION['admin_id']))
{
    echo "<script>window.location.assign('login.php')</script>";
}
$adminid=$_SESSION["admin_id"];
$sql ="SELECT * from admin where admin_id = '$adminid'";
$result = $conn->query($sql);
if($row = $result->fetch_assoc())
{ 
    //$aemail=$row['admin_email'];
    $apic=$row['admin_image'];
    $aname=$row['admin_fullname'];
    $atype=$row['admin_type'];
    $adminname=$row['admin_username'];
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>VEND : Admin</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="../images/lvrlogo.jpg">
      
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- dataTables css -->
      <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
      <!-- modals css -->
      <link href="assets/plugins/modals/component.css" rel="stylesheet" type="text/css"/>
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Toastr css -->
      <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
      <!-- Notification Styles -->
      <link href="assets/plugins/NotificationStyles/css/demo.css" rel="stylesheet" type="text/css"/>
      <link href="assets/plugins/NotificationStyles/css/ns-default.css" rel="stylesheet" type="text/css"/>
      <link href="assets/plugins/NotificationStyles/css/ns-style-growl.css" rel="stylesheet" type="text/css"/>
      <link href="assets/plugins/NotificationStyles/css/ns-style-attached.css" rel="stylesheet" type="text/css"/>
      <link href="assets/plugins/NotificationStyles/css/ns-style-bar.css" rel="stylesheet" type="text/css"/>
      <link href="assets/plugins/NotificationStyles/css/ns-style-other.css" rel="stylesheet" type="text/css"/>
      <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
      <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
      <style>
          .select2-container .select2-selection--single {
            height: 35px!important;
          }
          .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 34px!important;
            }
         @media (min-width: 1600px){
         .col-md-4 {
         width: 24.333333%;
         }
         }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {  padding: 8px 5px!important;}
    </style>
   </head>
   <body class="hold-transition sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
      <header class="main-header">
         <a href="index.php" class="logo">
            <!-- Logo -->
            <span class="logo-mini">
               <!--<b>A</b>BD-->
                <label>V</label>
            </span>
            <span class="logo-lg">
               <!--<b>Admin</b>BD-->
              <!-- <img src="images/logo.png" alt=""> -->
                <label>VEND</label>
            </span>
         </a>
         <!-- Header Navbar -->
         <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <!-- Sidebar toggle button-->
               <span class="sr-only">Toggle navigation</span>
               <span class="pe-7s-keypad"></span>
            </a>
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  <!-- settings -->
                    <li class="dropdown dropdown-user" ><a href="" style="top: 7px;font-size: 20px;font-weight: bolder;"> <?=$atype;?></a></li>
                  <li class="dropdown dropdown-user">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                     <ul class="dropdown-menu">
                        <li><a href="admin_profile.php"><i class="pe-7s-users"></i> Profile </a></li>
                        <li><a href="change_pass.php"><i class="pe-7s-settings"></i> Change Password</a></li>
                        <li><a href="logout.php"><i class="pe-7s-key"></i> Logout</a></li>
                     </ul>
                  </li>
                  
               </ul>
            </div>
         </nav>
      </header>
      <!-- =============================================== -->
      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
         <!-- sidebar -->
         <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel text-center">
              
               <div class="info">
                <p> NAME : <?=$aname;?></p>
               </div>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
              <!--  <li class="header">MAIN NAVIGATION</li> -->
               <li class="active"><a href="index.php" style="font-size:18px;"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
               <li class="treeview" id="users">
                  <a href="#">
                  <i class="fa fa-tasks"></i><span>Products</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu"><span class="label label-success pull-right"></span>
                    <li><a href="product_add.php">Add Product </a></li> 
                     <li><a href="product_list.php">Product List  </a></li>
                  </ul>
               </li>
              <li><a href="users_list.php">Users List  </a></li>
            </ul>
         </div>
         <!-- /.sidebar -->
      </aside>
      <!-- =============================================== -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->