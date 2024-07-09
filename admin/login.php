<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>VEND: Admin</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="../images/lvrlogo.jpg">
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Pe-icon-7-stroke -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- style css -->
      <link href="assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
       <style>
           .container-center { margin: 2% auto 0;}
           .adminlogo {width: 90px;margin-top: 2%;}
           body
          {
            background: radial-gradient(center, ellipse cover, #0C9CCE 54%, #FFFFFF 88%); 
            background: -moz-radial-gradient(center, ellipse cover, #0C9CCE 54%, #FFFFFF 88%); 
            background: -webkit-radial-gradient(center, ellipse cover, #0C9CCE 54%, #FFFFFF 88%); 
            background: -o-radial-gradient(center, ellipse cover, #0C9CCE 54%, #FFFFFF 88%); 
            }
       </style>
   </head>
   <body>
      <!-- Content Wrapper -->
      <div class="login-wrapper">
         <div class="container-center">
          <?php
                extract($_REQUEST); 
                if(isset($error)){?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>User Name & Password incorrect !</strong> 
                </div>
            <?php } ?>
            <div class="panel panel-bd">
               <div class="panel-heading">
                  <div class="view-header">
                     <div class="header-icon">
                        
                     </div>
                     <div class="header-title">
                        <h3>Welcome to VEND</h3>
                        <small><strong>Please enter your credentials to login.</strong></small>
                     </div>
                  </div>
               </div>
               <div class="panel-body">
                  <form action="loginverify.php" id="loginForm" novalidate>
                     <div class="form-group">
                        <label class="control-label" for="username">Username</label>
                        <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
                     </div>
                     <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="pwd" id="password" class="form-control">
                     </div>
                     <div>
                        <button class="btn btn-success">Login</button>
                       <!-- <a class="btn btn-warning" href="forget_password.php">Forget Password</a> -->
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- /.content-wrapper -->
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- bootstrap js -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   </body>
</html>