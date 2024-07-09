<?php
session_start();
extract($_REQUEST); 
include("../dbconfig.php");

if(isset($Add))
{
        $sql ="INSERT INTO `product` (`pid`, `pro_name`, `pro_image`, `pro_prise`, `pro_start_time`, `pro_end_time`, `pro_status`) VALUES (NULL, '$fullname', '1.png', '$price', '$stdate', '$enddate', '1');" or die(mysqli_error());     

       if ($conn->query($sql) === TRUE) 
       {  	
           echo "<script>window.location.assign('product_list.php?success=sucess')</script>";
       }
       else
       {
           echo "Error: " . $sql . "<br>" . $conn->error;     
       }
   
}

if(isset($stat))
{
    if($status==0)
    {
       	 $sql ="UPDATE `product` SET `pro_status` = 1 WHERE `pid` = '$gid'" ;
       if ($conn->query($sql) === TRUE) {
	
	       echo "<script>window.location.assign('product_list.php?succ=sucess')</script>";
        }
        else {
			 echo "<script>window.location.assign('product_list.php?fail=sucess')</script>";
			//echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
	else
	{
	    $sql ="UPDATE `product` SET `pro_status` = 0 WHERE `pid` = '$gid'" ;
       if ($conn->query($sql) === TRUE) {
	
	      echo "<script>window.location.assign('product_list.php?succ=sucess')</script>";
       }
        else {
			 echo "<script>window.location.assign('product_list.php?fail=sucess')</script>";
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
}


if(isset($del))
{
    $query="DELETE FROM `product` where pid='$gid'";
    if ($conn->query($query) === TRUE) {

        echo "<script>window.location.assign('product_list.php?deleted=sucess')</script>";

    } else {

        echo "<script>window.location.assign('product_list.php?delete=error')</script>";

    }
} ?>