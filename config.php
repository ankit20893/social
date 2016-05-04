<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04-05-2016
 * Time: 14:28
 */
$conn=mysqli_connect('localhost','root','','test');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>