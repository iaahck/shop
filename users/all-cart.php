<?php 
session_start();
include_once '../php/config.php'; 
include_once '../php/validate.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
    <link rel="stylesheet" href="../css/add.css">
    <script src="../icons/js/all.min.js"></script>
</head>
<body style="background: var(--light2);">
<div class="back-btn" style="margin: 15px;">
<a href="home.php">
    <i style="font-size: 35px;color: var(--light);" class="fas fa-arrow-left"></i>
</a>
</div>
    <!--========== all products section ==========-->
    <div class="all-products">
        <h1>all catigories</h1>
        <div class="catigories-container">
            <?php
              $s = mysqli_query($conn, "SELECT * FROM catigories ORDER BY add_date DESC");
              while ($row = mysqli_fetch_array($s)) {
             ?>
            <div class="catigories">
            <div class="card-image">
                <img style='height: 350px;object-fit: cover;width: 350px;' src="../admin/catigories-images/<?php echo$row['catigory_image'];?>" alt='image failed'>
                </div>
                <a href="items.php?catid=<?php echo $row['catid'];?>" class="more"><?php echo$row['catigoryname'] ?></a>
            </div>
            <?php } ?>
           

        </div>
       
    </div>
</body>
</html> 