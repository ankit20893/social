<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05-05-2016
 * Time: 16:41
 */
 extract($_POST);
 
 if(isset($upload)){
	
	 require 'config.php';
	 $pic=$_FILES['image']['name'];
	 // print_r($pic);
     move_uploaded_file($_FILES['image']['tmp_name'],"./uploads/".$_FILES['image']['name']);
	 $id=$_GET['id'];
	 //print_r($pic);
	// echo $pic;
	 $sql="UPDATE users SET profilePic='$pic' WHERE id=$id";
	 $result=mysqli_query($conn,$sql);
	 header('location:welcome.php');
 }
 
?>
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload photo</title>
</head>
<body>
	
<div class="col-sm-6">
    <table class="table">
        <form class="form-control" action="#" method="post" enctype="multipart/form-data">
			
            <tr><input type="file" name="image"></tr>
            <tr><input type="submit" name="upload" value="Upload Photo"></tr>
            </form>
        </table>
    </div>
</body>
</html>
