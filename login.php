<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04-05-2016
 * Time: 15:14
 */
session_start();
require 'config.php';
extract($_POST);
if (isset($login)){
    $pass=md5($password);
    $sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $result=mysqli_query($conn,$sql);
    //print_r($result) or die();
    //echo mysqli_num_rows($result);
    if(mysqli_num_rows($result)>1){
        echo "unable to login";
    }
    else{
        $_SESSION["email"]=$email;
        header('location:welcome.php');
    }
}
?>
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
<div>
    <h1><a href="index.php">Home</a>&nbsp;<a href="registration.php">Registration</a></h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in </h1>
            <div class="account-wall">

                <form class="form-signin" action="#" method="post">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="registration.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
</body>
</html>
