<?php
session_start();
extract($_REQUEST);
include("../dbconfig.php");

$adminid=$_SESSION["admin_id"];
$sql1   = "SELECT * from `admin` where `admin_id` = '$adminid'";
$result = $conn->query($sql1);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		$oldpassword = $row['admin_password'];
	}
}
if ($oldpassword == $opwd)
{
	
	$sql = "UPDATE `admin` SET `admin_password` = '$npwd' where `admin_id` = '$adminid' ";
	if ($conn->query($sql) === TRUE)
	{
		echo "<script>window.location.assign('change_pass.php?pwd=sucess')</script>";
		//echo $conn->error;
	}
}
else
{
	echo "<script>window.location.assign('change_pass.php?epwd=Old Password not match')</script>";
}
$conn->close();
?>