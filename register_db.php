<?php
session_start();
extract($_REQUEST); 
include("dbconfig.php");

    $csql = "SELECT * FROM `register` WHERE `reg_email` = '$email'";
    $check = $conn->query($csql);
    $count = $check->num_rows;
    //echo $count; 
    
    if($count > 0){
	echo "<script>window.location.assign('login.php?email=exits');</script>";
    } 
    else {
        $sql ="INSERT INTO `register` (`reg_id`, `reg_name`, `reg_email`, `reg_phone`, `reg_gender`, `reg_password`, `reg_address`) VALUES (NULL, '$name', '$email', '$phone', '$gender', '$regpassword', '$address');" or die(mysqli_error());
       if ($conn->query($sql) === TRUE) 
       {  	
           echo "<script>window.location.assign('login.php?success=sucess')</script>";
       }
       else
       {
           echo "Error: " . $sql . "<br>" . $conn->error;     
       }
   
    }

 ?>