<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/dist/css/select2.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<section class="content-header">

</section>
<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="panel panel-success">
            <div class="panel-body">
                <h2>Product Add</h2>
               <div class="col-md-12">
                  <br/>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post" action="product_db.php" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="name" class="control-label col-md-4 col-sm-4 col-xs-12">Name:</label> 
                        <div class="col-md-7 col-sm-7 col-xs-12 col-xs-12">
                           <input type="text" id="fullname" name="fullname" class="form-control" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="name" class="control-label col-md-4 col-sm-4 col-xs-12">Image:</label> 
                        <div class="col-md-7 col-sm-7 col-xs-12 col-xs-12">
                           <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="name" class="control-label col-md-4 col-sm-4 col-xs-12">Price:</label> 
                        <div class="col-md-7 col-sm-7 col-xs-12 col-xs-12">
                           <input type="number" id="price" name="price" class="form-control" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="name" class="control-label col-md-4 col-sm-4 col-xs-12">Start Date:</label> 
                        <div class="col-md-7 col-sm-7 col-xs-12 col-xs-12">
                           <input type="date" id="example-date-input" name="stdate" class="form-control" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="name" class="control-label col-md-4 col-sm-4 col-xs-12">End Date:</label> 
                        <div class="col-md-7 col-sm-7 col-xs-12 col-xs-12">
                           <input type="date" id="example-date-input" name="enddate" class="form-control" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="name" class="control-label col-md-4 col-sm-4 col-xs-12">End Time:</label> 
                        <div class="col-md-7 col-sm-7 col-xs-12 col-xs-12">
                           <input type="text" name="time" class="form-control" placeholder="16:45:00" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-11">
                           <input type="submit" value="Add" name="Add" class="btn btn-success pull-right" style="margin-top:10px;padding:8px 25px;">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include("footer.php"); ?>
<script type="text/javascript" src="assets/dist/js/select2.min.js"></script>