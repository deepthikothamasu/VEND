<?php
extract($_REQUEST);
include('../dbconfig.php');
$contact_sql = $conn->query("SELECT * FROM `admin`");
$contact_row = $contact_sql->fetch_assoc();
$pwd = $contact_row['admin_password'];
$aemail = $contact_row['admin_email'];
$username = $contact_row['admin_username'];
if($email == $aemail)
{
        $to = $email;
        $subject = "Forget Password";
        $subhead = ucwords("Your Password Details");
        echo $message = "<html>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
        <!-- Optional theme -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' integrity='sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r' crossorigin='anonymous'>
        <!-- Latest compiled and minified JavaScript -->
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' crossorigin='anonymous'></script>
        
        <body style='background:#fcfcfc;border:1px solid #23bfff'>
        <div class='col-md-12' style='background:#23bfff;padding-top:0px;padding-bottom:5px' >
        <center>
        <h1 style='color: #FFF;font-weight: bold;'>Welcome</h1>
        </center>
        </div>
        <div class='col-md-12' style='margin:15px;'>
        <center><br>
        <h2 style='color:#00c100;'>Your Password Details</h2>
        </center>
        </div>
        <div style='padding-bottom:50px;'>
        <center> 
        <table>
        <tr>
        <th style='color: #23bfff;font-size: 18px;padding: 10px;'>User Name </th>
        <td style='color: #000;font-size: 18px;padding: 10px;text-decoration: none;'> : $username</td>
        </tr>
        <tr>
        <th style='color: #23bfff;font-size: 18px;padding: 10px;'>Password </th>
        <td style='color: #000;font-size: 18px;padding: 10px;text-decoration: none;'> : $pwd</td>
        </tr>
        </table>
        </center>
        </div>
        </body>
        </html>";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From:<fbsima@dvts.in>' . "\r\n";
        $sentmail = mail($to,$subject,$message,$headers);
        if($sentmail === TRUE)
        {
            echo "<script>window.location.assign('forget_password.php?succ=succ')</script>";
        }
        else
        {
            //echo "<script>window.location.assign('forget_password.php?error=register')</script>";
            echo $conn->error;
        }
}
else
{
    echo "<script>window.location.assign('forget_password.php?wrong=$email')</script>";
            echo $conn->error;
    
}