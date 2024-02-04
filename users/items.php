<?php
 session_start();
 require_once '../php/config.php';
 require_once '../php/validate.php';
 
    $catid = $_GET['catid'];
    $_SESSION['catid'] = $catid;
    $details = mysqli_query($conn, "SELECT * FROM catigories WHERE catid = '$catid'");
    $row = mysqli_fetch_array($details);
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
<a href="all-cart.php">
    <i style="font-size: 35px;color: var(--light);" class="fas fa-arrow-left"></i>
</a>
</div>
    <!--========== all products section ==========-->
    <div class="all-products">

        <h1><?php echo$row['catigoryname']; ?></h1>

        <div class="items-container">
        <?php
            $sql = mysqli_query($conn, "SELECT * FROM `items` WHERE item_cat='$catid' ORDER BY add_date DESC");
            $get_items = mysqli_num_rows($sql);
            while ($items = mysqli_fetch_array($sql)) {
            ?>
            <div class="items-card">
                <div class="card">
                    <div class="card-body" class="item-img">
                        <img style="height: 350px;object-fit: cover;width: 350px;" src="../admin/items-images/<?php echo$items['photo'];?>" class="order-pic">
                    </div>
                    <div class="card-footer">
                    <?php //echo $items['item_id'];?>
                        <p class="discription"><?php echo $items['item_name']; ?></p>
                        <a href='order.php?item_id=<?php echo $items['item_id'];?>' class="buy-item">View Item</a>
                    </div>
                </div>
            </div>
                <?php } ?>

            
            </div>
        </div>

</body>
</html>