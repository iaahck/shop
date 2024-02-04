<?php
 session_start();
 require_once '../php/config.php';
 require_once '../php/validate.php';

    $orderid = $_GET['orderid'];
    $details = mysqli_query($conn, "SELECT * FROM `orders` WHERE orderid = '$orderid'");
    $get_user = mysqli_fetch_array($details);
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
<div class="back-btn" style="margin: 15px;">
<a href="home.php">
    <i style="font-size: 35px;color: var(--light);" class="fas fa-arrow-left"></i>
</a>
</div>
 <?php //echo $orderid; ?>
    <!--========== all products section ==========-->
    <div class="all-products">
            <?php 
                $s = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id='".$get_user['customer_id']."'");
                $srow = mysqli_fetch_array($s);
            ?>

            <?php 
                $s = mysqli_query($conn, "SELECT * FROM orders WHERE orderid = '$orderid'");
                $orow = mysqli_fetch_array($s);
            ?>
       
        <div class="items-container">
            
          <div class="costomer-details"><fieldset style="border: 2px solid var(--light);">
            <h1>Buyer details</h1>
            <h2>Name: <?php echo$srow['name'];?></h2>
            <h2>Quantity: <?php echo$orow['order_quality']; ?></h2>
            <h2>Address: <?php echo$orow['address'];?></h2>
            <h2>Number: <a href="tel:+234<?php echo$orow['mobile']; ?>" style=' color: var(--light);'><?php echo$orow['mobile']; ?></a></h2>
            <h2>Order On : <?php echo$orow['regdate'];?></h2>
            </div>
             <?php
            $sql = mysqli_query($conn, "SELECT * FROM items WHERE item_id='".$get_user['buyitem']."'");
            $get_items = mysqli_num_rows($sql);
            $items = mysqli_fetch_array($sql);
            ?> 
             </fieldset>
            <div class="items-card">
                <div class="card">
                    <div class="card-body" class="item-img">
                        <img style="height: 350px;object-fit: cover;width: 350px;" src="../admin/items-images/<?php echo $items['photo'];?>" class="order-pic">
                    </div>
                    <div class="card-footer">
                        <p class="discription"><?php echo $items['item_name']; ?></p>
                        <a href='#' class="buy-item">Status: <?php echo $orow['status1']; ?></a>
                    </div>
                </div> 
            </div>
                
            
            </div>
        </div>

</body>
</html>