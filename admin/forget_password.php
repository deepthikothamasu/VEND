<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Siri Estates - Admin</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <link rel="apple-touch-icon" type="image/x-icon" href="assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/dist/img/ico/apple-touch-icon-144-precomposed.png">
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- pe-icon-7-stroke -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style -->
      <link href="assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
   </head>
   <body>
      <!-- Content Wrapper -->
      <div class="login-wrapper">
         <div class="container-center">
           <?php
             extract($_REQUEST);
             if(isset($wrong))
            { ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>Try Again !</strong> This <b style="color:red"><?=$wrong;?></b> is Enter Wrong Enter Correct Email
            </div>
            <?php } if(isset($succ)) { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                Your Login Credentials Sent To This <b style="color:red"><?=$succ;?></b> mail,Check Your inbox or spam
            </div>
            <?php } ?>
            <div class="panel panel-bd">
               <div class="panel-heading">
                  <div class="view-header">
                     <div class="header-icon">
                        <i class="pe-7s-refresh-2"></i>
                     </div>
                     <div class="header-title">
                        <h3>Password Reset</h3>
                        <small><strong>Please fill the form to recover your password</strong></small>
                     </div>
                  </div>
               </div>
               <div class="panel-body">
                  <form action="forget_mail.php" method="post" enctype="multipart/form-data">
                     <p>Fill with your mail to receive instructions on how to reset your password.</p>
                     <div class="form-group">
                        <label class="control-label" for="username">Email</label>
                        <input type="email" placeholder="example@gmail.com" title="Please enter you email adress" required="" value="" name="email" id="username" class="form-control">
                        <span class="help-block small">Your registered email address</span>
                     </div>
                     <div>
                        <button class="btn btn-success">Forget Password</button>
                        <a class="btn btn-warning" href="index.php">Login</a>
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