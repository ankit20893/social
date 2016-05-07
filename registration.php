<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02-05-2016
 * Time: 19:22
 */
require 'config.php';
extract($_POST);

if(isset($submit)) {
    $pass=md5($password);
    $sql = "INSERT INTO users VALUES('','$fname','$lname','$pass','$mobile','$address','$gender','$email','')";
    if (mysqli_query($conn, $sql)) {
		
$to = "ankit20893@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:ankit.singh@mobiloitte.in \r\n";
         $header .= "Cc:ankit.singh@mobiloitte.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
         
        $msg="Records added successfully.";
       // header('location:login.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script language="JavaScript" src="js/validation.js"></script>
</head>
<body>
<div>
    <h1><a href="index.php">Home</a>&nbsp;<a href="registration.php">Registration</a></h1>

</div>
<div class="col-sm-6">
    <table border="0" class="table">
    <form class="form-control" name="regis"  action="#" method="post" enctype="multipart/form-data">
        <tr><td><?php  echo "<span style='color:green'>".@$msg."</span>";?></td></tr>
        <tr><td>First Name: </td><td><input type="text"  id="fname" name="fname"></td></tr>
        <tr><td>Last Name: </td><td><input type="text"   id="lname" name="lname"></td></tr>
        <tr><td>Email: </td><td><input type="email"   id="email" name="email"></td></tr>
        <tr><td>Password: </td><td><input type="password"   id="password" name="password"></td></tr>
        <tr><td>Mobile: </td><td><input type="number"   id="mobile" name="mobile"></td></tr>
        <tr><td>Address: </td><td><input type="text"   id="address" name="address"></td></tr>
        <tr><td>Gender: </td><td><input type="radio" id="gender" name="gender" value="male" checked>male<br>
                <input type="radio" id="gender" name="gender" value="female">female
            </td></tr>
        <tr><td><input onclick="return check_blank();" type="submit" name="submit" value="Submit"></td>
            </tr>
            </form>
    </table>

</div>
</body>
</html>
