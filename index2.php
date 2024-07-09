<?php include("header.php");  
 $today = date('Y-m-d h:i:s'); ?>
 
<style>
    .proimage img { width: 100%; height: 250px !important;}
    .navbar-brand { color: white !important; }
    .sticky-navigation.stuck { background: rgba(4, 4, 4, 0.9); }
    .navbar-default .navbar-nav > .active > a { color: #F24F18; }
    .navbar-default .navbar-nav > li > a { color: #fff; }
    h3 span {float: right;}
</style>
<!-- start content -->  
<div class="content">
   <div class="container">
      <div class="separator"></div>
      <h4 class="headline">Products</h4>
      <div class="row">
        <?php 
            $i=1;
            $sql="SELECT * FROM `product` WHERE `pro_end_time` > '$today' AND `pro_status` = '1'";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
        { 
         $pro_end_time =  $row['pro_end_time'];
          ?>
         <div class="col-md-4 col-sm-4">
             <div class="proimage">
                <img src="img/products/<?=$row['pro_image'];?>">
             </div>
            <div class="project-title">
                <h3><?=$row['pro_name'];?> &nbsp;<span> Minimum bid: <?=$row['pro_prise'];?>/- </span> </h3>
            </div>
             <div class="project-category">
             <span> Start Date : <?=$row['pro_start_time'];?> </span>
            </div>
             <div class="project-category">
              End Date : <?=$row['pro_end_time'];?>
            </div>
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post" action="userprodts_db.php" enctype="multipart/form-data">
                <input type="hidden" value="<?=$row['pid'];?>" name="proid"> 
                <input type="hidden" value="<?=$row['pro_name'];?>" name="proname"> 
                <input type="hidden" value="<?=$row['pro_prise'];?>" name="proprice"> 
                <input type="hidden" value="<?=$username;?>" name="regid"> 
                <input type="hidden" value="<?=$useremail;?>" name="regemail"> 
               <?php 
                if(isset($_SESSION['login_username'])){ ?>
                    <span> Bid Amount : <input type="number" value="" name="bidamt" required> </span>
                    <input type="submit" value="Add" name="Add" class="btn btn-success pull-right">
               <?php } ?>
             </form><br>
             <a href="bidding_list.php?pid=<?=$row['pid'];?>" style="font-size: 16px;color: red;">Bidding List</a>
         </div>
    <?php  $i++; } ?>
      </div>
       <div class="separator"></div>
      <!-- row -->
   </div>
   <!-- end container -->
</div>
<!-- end content -->

<?php include("footer.php"); ?>