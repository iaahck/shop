<?php

 require_once '../php/config.php';
    $did= $_GET['delid'];
    $pic=$_GET['pic'];
    $dir="items-images"."/".$pic;
    $sql = mysqli_query($conn, "DELETE FROM `items` WHERE item_id = '$did'");
    unlink($dir);
    header('location:manage-cat.php');      
?>