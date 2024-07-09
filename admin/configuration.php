<?php include("header.php"); ?>
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
    #social-widget .fb_inner, #social-widget .twitter_inner, #social-widget .g_plus_inner {padding: 25px 15px; height: 100px;}
    #social-widget h3 {font-size: 22px;}
</style>
<section class="content-header">
   <div class="header-icon">
      <i class="fa fa-users"></i>
   </div>
   <div class="header-title">
      <h1>Configuration</h1>
       <br>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
         <li class="active">Configuration</li>
      </ol>
   </div>
</section>
<!-- Main content -->
<section class="content">
   <div class="row">
       <div class="panel-heading">
            <div class="panel-title">
                <h4> <button onclick="goBack()" class="btn btn-danger pull-right">Go Back</button> </h4> <br><br>
            </div>
        </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="social-widget" id="social-widget">
                <ul>
                    <a href="managers_list.php"><li id="managers">
                        <div class="twitter_inner">
                            <h3>Managers List</h3>
                        </div>
                    </li></a>
                    <a href="branch_add.php"><li id="managers">
                        <div class="fb_inner">
                            <h3>Branches</h3>
                        </div>
                    </li></a>
                    <a href="individual_fine_list.php"><li id="managers">
                        <div class="twitter_inner">
                            <h3>Individual fine</h3>
                        </div>
                    </li></a>
                    <a href="news_add.php"><li id="managers">
                        <div class="twitter_inner">
                            <h3>Latest News</h3>
                        </div>
                    </li></a>
                    <a href="notification_add.php"><li id="managers">
                        <div class="fb_inner">
                            <h3>Notifications</h3>
                        </div>
                    </li></a>
                    <a href="users_list_defilade.php"><li id="managers">
                        <div class="twitter_inner">
                            <h3>Defaulters List</h3>
                        </div>
                    </li></a>
                </ul>
            </div>
      </div>
   </div>
</section>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<?php include("footer.php"); ?>