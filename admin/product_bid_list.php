<?php include('header.php'); ?>
<section class="content-header">
</section>
<!-- Main content -->
<style type="text/css">
   .card-header-menu:after {
   position: absolute;
   top: 0;
   right: 0;
   content: "";
   border-left: 2em solid transparent;
   border-bottom: 2em solid transparent;
   border-right: 2em solid #474751;
   border-top: 2em solid #474751;
   border-top-right-radius: 4px;
   }
   .modal-dialog { width: 60%; }
   .card p{ text-align: center; margin: 0px; margin-bottom: 5px; }
   .card-content-member { height: 160px ; }
         .card-header
         {
         background-image:none !important;
         height: 250px;
         width: 100%;
         overflow: hidden;
          padding: 0px;
         }
    .thumbnail {width: 80px;float: left;margin: 0px;}
    .badge, label {font-size: 16px;}
    .paging_simple_numbers, .dataTables_info {display: none;}
      </style>
<section class="content">
   <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="panel panel-success" >
            <div class="panel-body">
                <h1>Bid List</h1>
               <div class="table-responsive">
               <table id="dataTableExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Product Name</th>
                            <th> Product Price</th>
                            <th> User Name</th>
                            <th> User Email</th>
                            <th> User Bid Amount</th>
                            <th> Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i=1;
                            $sql="SELECT * FROM user_product_bid where pid = $pid";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc())
                            { ?>
                        <tr>
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post" action="mail.php" enctype="multipart/form-data">
                            <th><?=$i;?></th>
                            <th><input type="text" value="<?=$row['pro_name'];?>" name="proname" readonly style="width:100px;"></th>
                            <th><input type="text" value="<?=$row['pro_price'];?>" name="proprice" readonly style="width:60px;"></th>
                            <th><input type="text" value="<?=$row['reg_name'];?>" name="regname" readonly style="width:120px;"></th>
                            <th><input type="text" value="<?=$row['reg_email'];?>" name="regemail" readonly style="width:220px;"></th>
                            <th><input type="text" value="<?=$row['bid_amt'];?>" name="regamt" readonly style="width:50px;"></th>
                            <th><input type="submit" value="Send Mail" name="Mail" class="btn btn-success"></th>
                            </form>
                        </tr>
                        <?php } $i++; ?>
                    </tbody>
                </table>
               </div>
            </div>
         </div>
      </div>             
    </div>
</section>
<!-- /.content -->
<?php include('footer.php');?>