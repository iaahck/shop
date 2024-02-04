<?php
$sql = mysqli_query($conn, "SELECT * FROM catigories WHERE catid='$catid'");
$row = mysqli_fetch_array($sql);
$catid = $row['catid'];
$catname = $row['catigoryname'];
 
echo$catname; 
?>