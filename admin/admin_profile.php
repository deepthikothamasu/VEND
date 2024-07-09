<?php include('header.php');
   //$admin_id = $_SESSION["admin_id"];
   $sql = $conn->query("SELECT * FROM `admin` WHERE admin_id = '$adminid'");
    $row = $sql->fetch_object();
   ?>
<section class="content-header">
   <div class="header-icon"><i class="pe-7s-user-female"></i></div>
   <div class="header-title">
      <h1>Profile</h1>
      <small>Edit user data in clear profile design</small>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
         <li><a href="#"> Admin Users</a></li>
         <li class="active"> Edit</li>
      </ol>
   </div>
</section>
<!-- Main content -->
<section class="content">
   <form data-toggle="validator" action="admin_db.php" method="post" enctype="multipart/form-data">
      <div class="row">
         <div class="col-sm-12 col-md-4">
            <div class="card">
               <div class="card-header">
                  <div class="card-header-menu">
                     <i class="fa fa-user"></i>
                  </div>
                  <div class="card-header-headshot"></div>
                  <style type="text/css">
                     .card-header-headshot 
                      { 
                         <?php if(empty($row->admin_image)) {  ?>
                            background-image: url('assets/dist/img/avatar3.png'); 
                         <?php }  else { ?>
                            background-image: url('assets/dist/img/profiles/<?=$row->admin_image;?>'); 
                        <?php } ?>
                      }
                  </style>
               </div>
               <div class="card-content">
                  <div class="card-content-member">
                     <input type="file" name="slogo" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-8">
            <!-- Multiple panels with drag & drop -->
            <div class="panel panel-success" >
               <div class="panel-body">
                  <div class="row">
                      <input type="hidden" name="adminid" value="<?=$adminid?>">
                     <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                           <label for="inputName" class="control-label">User Name</label>
                           <input type="text" class="form-control" id="username" name="username" value="<?=$row->admin_username;?>" readonly>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                           <label for="inputName" class="control-label">Full Name</label>
                           <input type="text" class="form-control" id="fname" name="fname" value="<?=$row->admin_fullname;?>">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                           <label for="inputName" class="control-label">Email</label>
                           <input type="email" class="form-control" value="<?=$row->admin_email;?>" name="email" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                           <label for="inputName" class="control-label">Mobile No</label>
                           <input type="number" class="form-control" id="mobile" name="mobile" value="<?=$row->admin_mobile;?>">
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                           <label for="inputName" class="control-label">Type</label>
                           <input type="text" class="form-control" id="admintype" name="admintype" value="<?=$row->admin_type;?>" readonly>
                        </div>
                     </div>
                  </div>
                 <div class="form-group">
                     <button type="submit" class="btn btn-success pull-right" name="update">Submit</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.row -->
   </form>
</section>
<!-- /.content -->
<?php include('footer.php');?>