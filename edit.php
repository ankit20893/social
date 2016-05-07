<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04-05-2016
 * Time: 19:07
 */
require 'config.php';
$id=$_GET['id'];

if (isset($_GET['id'])){


    $sql="SELECT * FROM users WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $a=mysqli_fetch_assoc($result);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
<h1 align="center">hello <?php echo $a['first_name']." ".$a['last_name']; ?></h1>
<div class="col-sm-6">
    <table border="0" class="table">
        <form class="form-control" name="edit"  action="#" method="post" enctype="multipart/form-data">
            <tr><td><?php  echo "<span style='color:green'>".@$msg."</span>";?></td></tr>
            <tr><td>First Name: </td><td><input type="text"  id="fname" name="fname" value="<?php echo $a['first_name'];?>"></td></tr>
            <tr><td>Last Name: </td><td><input type="text"   id="lname" name="lname" value="<?php echo $a['last_name'];?>"></td></tr>
            <tr><td>Email: </td><td><input type="email"   id="email" name="email" value="<?php echo $a['email'];?>" required></td></tr>
            <tr><td>Password: </td><td><input type="password"   id="password" name="password" value="<?php echo $a['password'];?>"required></td></tr>
            <tr><td>Mobile: </td><td><input type="number"   id="mobile" name="mobile" value="<?php echo $a['mobile'];?>"></td></tr>
            <tr><td>Address: </td><td><input type="text"  id="address" name="address" value="<?php echo $a['address'];?>"></td></tr>
            <tr><td>Gender: </td><td><input type="radio" id="gender" name="gender" value="male" checked>male<br>
                    <input type="radio" id="gender" name="gender" value="female">female
                </td></tr>
            <tr><td><input type="submit" name="submit" value="Update"></td>

        </form>
    </table>

</div>

</body>
</html>
<?php
extract($_POST);
 if (isset($submit)){
     $id=$_GET['id'];
    $sql="UPDATE users SET first_name='$fname',last_name='$lname',password='$password',mobile='$mobile',address='$address',email='$email' WHERE id='$id'";
    mysqli_query($conn,$sql);
    header('location:welcome.php');
}
?>