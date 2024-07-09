 <?php
 extract($_REQUEST);

$myemail = "$regemail"; 
$subject = "VEND"; 
$message = "
<center style='font-size: 20px;font-weight: 600;'>VEND:</center>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
    <!-- Optional theme -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' integrity='sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r' crossorigin='anonymous'>
    <!-- Latest compiled and minified JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' crossorigin='anonymous'></script>
    <style>
        a:hover {
            color: #FFF;
            text-decoration: none;
            background-color: #039d03;
        }
    </style>
</head>
<body style='background:#fcfcfc;border:1px solid #3c8dbc'>
    <div style='padding-bottom:50px;'>
        <center>
        <p>Your Bidding is Successfully, Thank </p>
            <table>
                <tr>
                    <th style='color: #3c8dbc;font-size: 18px;padding: 10px;'>Product Name</th>
                    <td style='color: #000;font-size: 18px;padding: 10px;text-decoration:none;'> : $proname</td>
                </tr>
                <tr>
                    <th style='color: #3c8dbc;font-size: 18px;padding: 10px;'>Product Price </th>
                    <td style='color: #000;font-size: 18px;padding: 10px;text-decoration: none;'> : $proprice</td>
                </tr>
                <tr>
                    <th style='color: #3c8dbc;font-size: 18px;padding: 10px;'>Your Name</th>
                    <td style='color: #000;font-size: 18px;padding: 10px;text-decoration: none;'> : $regname</td>
                </tr>
                <tr>
                    <th style='color: #3c8dbc;font-size: 18px;padding: 10px;'>Your Bid Amount</th>
                    <td style='color: #000;font-size: 18px;padding: 10px;text-decoration: none;'> : $regamt</td>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers 
$headers .= 'From:<manohar@dvts.in>' . "\r\n"; 
/* Send the message using mail() function */ 
mail($myemail, $subject, $message,$headers);
 echo "<script>
 alert ('Message Sent Successfully');
  window.location.assign('index.php');
</script>";
 ?>