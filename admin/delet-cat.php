<?php
 session_start();
 require_once '../php/config.php';
 require_once '../php/admin-validate.php';
 $cid = $_GET['catid'];
    $sql = mysqli_query($conn, "DELETE FROM `catigories` WHERE catid = '$cid'");
    $sql2 = mysqli_query($conn, "DELETE FROM `items` WHERE item_cat = '$cid'");
    if ($sql) {
        header("location: all-cat.php");
    }
?>