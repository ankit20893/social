<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04-05-2016
 * Time: 16:12
 */
session_start();
?>
<?php
session_destroy();
header('location:index.php')
?>
