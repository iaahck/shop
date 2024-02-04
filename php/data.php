<?php
$sql = mysqli_query($conn, "SELECT * FROM customers WHERE email='".$_SESSION['customer_id']."'");
$row = mysqli_fetch_array($sql);
$cid = $row['customer_id'];
$n = $row['name'];
$e = $row['email'];
$m = $row['mobile'];
$p = $row['password'];
$a = $row['address'];
 

?>