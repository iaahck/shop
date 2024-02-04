<?php
 session_start();
 include_once '../php/config.php'; 
 require_once '../php/admin-validate.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping</title>
    <link rel="stylesheet" href="../css/add.css">
    <script src="../icons/js/all.min.js"></script>
</head>
<body style="background: var(--light2);">

    <!--========== all products section ==========-->
    
    <div class="all-products">
    <div class="home-button">
        <a href="home.php" style="float: left; color: var(--light); margin: 20px 0 0 20px; font-size: 30px;" class="home-btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>all catigories</h1>
        <div class="catigories-container">
            <?php
               $s = mysqli_query($conn, "SELECT * FROM catigories ORDER BY add_date DESC");
              while ($row = mysqli_fetch_array($s)) {
             ?>
            <div class="catigories">
                <div class="card-image">
                <img style='height: 350px;object-fit: cover;width: 350px;' src="catigories-images/<?php echo$row['catigory_image'];?>" alt='image failed'>
                </div>
                <a href="manage-cat.php?catid=<?php echo $row['catid'];?>" class="more"><?php echo$row['catigoryname'] ?></a>
            </div>
            <?php } ?>
           

        </div>
       
    </div>
</body>
</html> 