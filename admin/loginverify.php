<?php
session_start();	//Starting session here.
extract($_REQUEST); // Extracting the Request.
include("../dbconfig.php");
 $sql= "SELECT * FROM admin WHERE (`admin_username` = '$email' OR `admin_email` = '$email') AND `admin_password` = '$pwd'";
$result = $conn->query($sql);
     if ($result->num_rows > 0)
    {
        
         $row =$result->fetch_assoc();
        $_SESSION["admin_name"] = $row['admin_fullname'];        
         $_SESSION["admin_id"] = $row['admin_id'];
         $_SESSION["admin_username"] = $row['admin_username'];
         // echo "Error: " . $sql . "<br>" . $con->error; exit;
	}
 if(isset( $_SESSION["admin_username"])) {
     $adminid=$_SESSION["admin_id"];
         $sql1="UPDATE `admin` SET `admin_logintime`=CURRENT_TIMESTAMP WHERE `admin_id` = '$adminid'";
         $conn->query($sql1);
		header("location:index.php?login"); 
             
    }
else
{
    header("location:login.php?error"); 
}
  $conn->close();

?>