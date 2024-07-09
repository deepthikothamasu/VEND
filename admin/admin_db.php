<?php 
session_start();
extract($_REQUEST); 
include("../dbconfig.php");
//print_r($_REQUEST);
if(isset($update))
{
    $slogo = $_FILES['slogo']['name'];
     $slogo = date('dmY').$slogo;
    $slogo_type = $_FILES['slogo']['type'];
    $slogo_size = $_FILES['slogo']['size'];
    $move = move_uploaded_file($_FILES['slogo']['tmp_name'],'assets/dist/img/profiles/'.$slogo);

        if( $slogo_type!="")
        {
            $sql ="UPDATE `admin` SET `admin_fullname`='$fname',`admin_username`='$username',`admin_mobile`='$mobile',`admin_type`='$admintype',`admin_image`='$slogo',`admin_email`='$email' WHERE `admin_id`='$adminid'" or die(mysqli_error());
        }
        else
        {
          $sql ="UPDATE `admin` SET `admin_fullname`='$fname',`admin_username`='$username',`admin_mobile`='$mobile', `admin_email`='$email', `admin_type`='$admintype' WHERE `admin_id`='$adminid'" or die(mysqli_error());
        }
        if ($conn->query($sql) === TRUE) {
            
            echo "<script>window.location.assign('admin_profile.php?edit=updated')</script>";
            
        } else {
         
        //echo "<script>window.location.assign('profile.php?error=error')</script>";
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
?>