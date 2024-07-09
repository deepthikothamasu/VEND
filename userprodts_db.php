<?php
session_start();
extract($_REQUEST); 
include("dbconfig.php");
if(isset($Add))
{
        $sql ="INSERT INTO `user_product_bid` (`up_id`, `pid`, `pro_name`, `pro_price`, `reg_name`, `reg_email`, `bid_amt`) VALUES (NULL, '$proid', '$proname', '$proprice', '$regid', '$regemail', '$bidamt');" or die(mysqli_error());     
       if ($conn->query($sql) === TRUE) 
       {  	
           echo "<script>window.location.assign('index.php?success=sucess')</script>";
       }
       else
       {
           echo "Error: " . $sql . "<br>" . $conn->error;     
       }
   
}
?>