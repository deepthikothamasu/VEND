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
                <h2>Product List</h2>
               <div class="table-responsive">
               <table id="dataTableExample" class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th> Price</th>
                        <th> Start Date</th>
                        <th> End Date</th>
                        <th>Image</th>
                         <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                       <?php 
                        $i=1;
                        $sql="SELECT * FROM product";
                       $result = $conn->query($sql);
                       while($row = $result->fetch_assoc())
                       { ?>
                        <tr>
                            <td  style=""><?=$i;?></td>
                            <td  style=""><?=$row['pro_name'];?></td>
                            <td  style=""><?=$row['pro_prise'];?></td>
                            <td  style=""><?=$row['pro_start_time'];?></td>
                            <td  style=""><?=$row['pro_end_time'];?></td>
                            <td> <img src="../img/products/<?=$row['pro_image'];?>" class="img-thumbnail" width="100px"></td>
                            <td>
                                
                                <?php 
                                  if($row['pro_status'] == 1) {
                                    ?> 
                               <a href="product_db.php?stat=stat&&&gid=<?=$row['pid'];?>&&status=<?=$row['pro_status'];?>" class="btn btn-success btn-circle m-b-5" title="Active"><i class="fa fa-thumbs-up"></i></a>
                               <?php } else { ?>
                               <a href="product_db.php?stat=stat&&&gid=<?=$row['pid'];?>&&status=<?=$row['pro_status'];?>" class="btn btn-danger btn-circle m-b-5" title="Deactive"><i class="fa fa-thumbs-down"></i></a>
                               <?php } ?> <!--
                               &nbsp;<a href="product_edit.php?edit=<?=$row['pid'];?>" title="Edit Member List" class="btn btn-pink btn-circle m-b-5"><i class="fa fa-edit"></i>
                               </a> -->
                               &nbsp;
                               <a href="product_db.php?del=del&&gid=<?=$row['pid'];?>" title="Delete Category " class="btn btn-danger btn-circle m-b-5" onclick="return confirm('Are You Sure the delete this Member')"><i class="fa fa-trash-o"></i>
                               </a>&nbsp;<br>
                                <a href="product_bid_list.php?pid=<?=$row['pid'];?>" style="color:blue;"> Bid List</a>
                            </td>
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