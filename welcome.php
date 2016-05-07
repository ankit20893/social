<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04-05-2016
 * Time: 15:39
 */
session_start();
ob_start();
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
    //@exit(header("Location: /index.php"));
header('location:index.php');
}
else{
require  'config.php';
    $email=$_SESSION["email"];
    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

        echo "<h1 align='center'>Hello  ".$row["first_name"]." ".$row["last_name"]."</h1>";
}
?>
<div class="col-sm-6">
<table class="table">
    <tr><h1>User's details</h1></tr>

      <tr><td><strong>id</strong></td><td><?php echo $row["id"];?></td></tr>
      <tr><td><strong>name</strong></td><td><?php echo $row["first_name"]."  ".$row["last_name"];?></td></tr>
       <tr><td><strong>email</strong></td><td><?php echo $row["email"];?></td></tr>
    <tr><td><strong>mobile</strong></td><td><?php echo $row["mobile"];?></td></tr>
    <tr><td><strong>address</strong></td><td><?php echo $row["address"];?></td></tr>
    <tr><td><strong>gender</strong></td><td><?php echo $row["gender"];?></td></tr>
    <tr><td><strong><a href="edit.php?id=<?php echo $row["id"];?>">Edit Profile</a></strong></td><td><strong><a href="logout.php">Logout</a></strong></td></tr>


    </table>
    </div>
<div class="col-sm-6">
    <?php if($row["profilePic"]==""){
        echo "<img src='uploads/default.jpg' title='default user'>";
	
	?>
        <a href="upload.php?id=<?php echo $row["id"];?>">plz upload photo</a>
    <?php
}
    else{
		$dir="uploads";
		echo '<img src="', $dir, '/', $row['profilePic'], '" alt="', $row['profilePic'], '" />';
       // echo "<img src='uploads/'.$row['profilePic']>";
       ?>
   
       <a href="upload.php?id=<?php echo $row["id"];?>">upload photo</a>
       <?php
    }
    ?>
    </div>

</body>

</html>

