<?php include("header.php"); ?>  

<div class="content">
   <div class="container">
      <div class="separator"></div>
      <h4 class="headline">Bidding List</h4>
      <div class="row">
        <table id="dataTableExample1" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Product Name</th>
                    <th> Product Price</th>
                    <th> User Name</th>
                    <th> User Email</th>
                    <th> User Bid Amount</th>
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
                    <th><?=$i;?></th>
                    <th><?=$row['pro_name'];?></th>
                    <th><?=$row['pro_price'];?></th>
                    <th><?=$row['reg_name'];?></th>
                    <th><?=$row['reg_email'];?></th>
                    <th><?=$row['bid_amt'];?></th>
                    
                </tr>
                <?php } $i++; ?>
            </tbody>
        </table>
      </div>
    </div>
</div>

<?php include("footer.php"); ?>  