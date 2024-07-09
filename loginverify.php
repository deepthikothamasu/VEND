<?php
session_start();    //Starting session here.
extract($_REQUEST); // Extracting the Request.
include("dbconfig.php");
$sql = "SELECT * FROM `register` WHERE `reg_email` = '$email' AND `reg_password` = '$logpassword'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(is_array($row)) {
    $sql1 = "SELECT * FROM `register` WHERE `reg_email` = '$email' AND `reg_password` = '$logpassword'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    if(is_array($row1)) {
    // setting the session variables.
    $_SESSION['login_id'] = $row['reg_id'];
    $_SESSION['login_username'] = $row['reg_name'];
    $_SESSION['login_phone'] = $row['reg_phone'];
    $_SESSION['login_email'] = $row['reg_email'];
     echo "<script>window.location.assign('index.php?login=success')</script>";
    }
    else
        {
        echo "<script>window.location.assign('login.php?deactive=login')</script>";
    }
}
else
    {
    echo "<script>window.location.assign('login.php?error=login')</script>";
}
?>