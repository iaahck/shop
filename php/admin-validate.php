<?php 
if (!isset($_SESSION['admin_session'])) {
    header('location:login.php');
 }
?>