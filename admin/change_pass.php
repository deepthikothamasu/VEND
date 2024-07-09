<?php include('header.php');?>
<section class="content-header">
   <div class="header-icon">
      <i class="pe-7s-key"></i>
   </div>
   <div class="header-title">
      <h1>Change Password</h1>
      <small>Change Your Current Password </small>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
         <li class="active">Change Password</li>
      </ol>
   </div>
</section>
<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-sm-12 col-md-offset-2 col-md-8">
         <!-- Multiple panels with drag & drop -->
         <?php  if(isset($pwd)){?>
         <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <b>Password is Successfully Changed !!!</b> 
         </div>
         <?php } if(isset($epwd)){?>
         <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <b>Try Again !</b> Old Password not match !!!
         </div>
         <?php } ?>    
         <div class="panel panel-success" >
            <div class="panel-heading">
               <div class="panel-title">
                  <h4> <i class="pe-7s-key"></i> Change Password</h4>
               </div>
            </div>
            <div class="panel-body">
               <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="change_pass_db.php" name="myForm" method="post">
                   <input type="hidden" name="adminid" value="<?=$adminid?>">
                  <div class="form-group">
                     <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Old Password <span class="required">*</span>
                     </label>
                     <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="opwd">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">New Password <span class="required">*</span>
                     </label>
                     <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="npwd">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">confirm Password <span class="required">*</span>
                     </label>
                     <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="cpwd">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-11 col-sm-10 col-xs-12">
                        <button type="submit" class="btn btn-success pull-right" onclick="return validateForm();">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- /.row -->
</section>
<!-- /.content -->
<script type="text/javascript">
   function validateForm()
   {  	
        var N = document.forms["myForm"]["npwd"].value;
        var C = document.forms["myForm"]["cpwd"].value;
        if (N != C) 
        {
            alert("Password doesn't Match");
            return false;
        }
   }
</script>
<?php include('footer.php');?>