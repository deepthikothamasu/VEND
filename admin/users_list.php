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
                <h2>Users List</h2>
               <div class="table-responsive">
               <table id="dataTableExample" class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th> E-mail</th>
                        <th> Phone</th>
                        <th> Gender</th>
                        <th>Password</th>
                         <th>Address</th>
                     </tr>
                  </thead>
                  <tbody>
                       <?php 
                        $i=1;
                        $sql="SELECT * FROM register";
                       $result = $conn->query($sql);
                       while($row = $result->fetch_assoc())
                       { ?>
                        <tr>
                            <td  style=""><?=$i;?></td>
                            <td  style=""><?=$row['reg_name'];?></td>
                            <td  style=""><?=$row['reg_email'];?></td>
                            <td  style=""><?=$row['reg_phone'];?></td>
                            <td  style=""><?=$row['reg_gender'];?></td>
                            <td  style=""><?=$row['reg_password'];?></td>
                            <td  style=""><?=$row['reg_address'];?></td>
                        </tr>
                       <?php $i++;} ?>
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