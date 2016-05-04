<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04-05-2016
 * Time: 15:39
 */
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
<?php if($_SESSION["email"]=='') {
header('location:index.php');
}
else{
require  'config.php';
    $email=$_SESSION["email"];
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

        echo "<h1>Hello  ".$row["first_name"]." ".$row["last_name"]."</h1>";
}
?>

<table class="table">
    <tr><h1>User's details</h1></tr>
    <tr>
    <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>mobile</th>
        <th>address</th>
        <th>gender</th>
        <th>action</th>
        <th>logout</th>
    </tr>
    <tr>
    <td><?php echo $row["id"];?></td>
        <td><?php echo $row["first_name"]."  ".$row["last_name"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["mobile"];?></td>
        <td><?php echo $row["address"];?></td>
        <td><?php echo $row["gender"];?></td>
        <td><a href="edit.php">Edit</a></td>
        <td><a href="logout.php">Logout</a></td>
    </tr>
    </table>
</body>

</html>

