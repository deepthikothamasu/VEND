<?php include('header.php');?>
<style type="text/css">
.fb_inner {
    background-color: rgba(69, 194, 3, 0.75);
    }
    .social-widget ul li {
        width: 23%;
        margin: 1%;
    }
    .panel-body {
    padding: 2% 10%; }
    h3 {margin: 0px;}
    #social-widget ul li { width: 31%; margin: 1%; }
    #social-widget .fb_inner, #social-widget .twitter_inner {padding: 25px 15px; height: 100px;}
    #social-widget h3 {font-size: 22px;}
</style>

<!-- Main content -->

<section class="content">
   <div class="row">
     <div class="col-md-12">
      <div class="social-widget">
         <ul>
            <li id="managers">
               <a href="product_add.php">
               <div class="fb_inner">
                  <i class="fa fa-tasks"></i>
                  <span class="sc-num">
                  </span>
                  <h3>Products Add</h3>
               </div>
                </a>
            </li>
            <li id="managers">
               <a href="product_list.php">
               <div class="fb_inner">
                  <i class="fa fa-tasks"></i>
                  <span class="sc-num">
                  </span>
                  <h3>Products List</h3>
               </div>
                </a>
            </li>
            <li id="managers">
               <a href="users_list.php">
               <div class="fb_inner">
                  <i class="fa fa-tasks"></i>
                  <span class="sc-num">
                  </span>
                  <h3>Users List</h3>
               </div>
                </a>
            </li>
         </ul>
      </div>
       </div>
    </div>
 
   <!-- /.row -->
</section>
<!-- Start Core Plugins
   =====================================================================-->
<!-- jQuery -->
<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<?php include('footer.php');?>