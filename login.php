<?php include("header.php"); ?>  
<!-- start content -->  
<div class="content">
   <div class="page-title">
      <div class="container">
         <h2>Login</h2>
      </div>
   </div>
   <div class="separator"></div>
   <div class="container">
      <div class="row">
           <?php
        if(isset($email)){ ?>
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong></strong> already registred please login to your account here.
        </div>
        <?php }
        ?>
         <div class="col-md-8 col-md-offset-2">
            <div id="ContactFormDiv"></div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post" action="loginverify.php" enctype="multipart/form-data">
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Email *</label>
                  <div class="col-lg-4">
                     <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label ">Password *</label>
                  <div class="col-lg-4">
                     <input type="password" class="form-control" name="logpassword" id="logpassword" placeholder="Password" required>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-lg-3 control-label"></label>
                  <div class="col-lg-4">
                      <input type="submit" value="login" name="Login" class="btn btn-success">
                  </div>
               </div>
            </form>
             <center><h5>Create your Register <u><a href="register.php">here</a></u> </h5></center>
         </div>
      </div>
   </div>
</div>
<!-- end content -->
<?php include("footer.php"); ?>