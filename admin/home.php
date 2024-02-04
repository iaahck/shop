<?php
 session_start();
 include_once '../php/config.php';
 if (!isset($_SESSION['admin_session'])) {
    header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../icons/js/all.min.js"></script>
</head>
<body>
    <div class="admin-home">

        <nav class="navigation">
            <h1 class="logo" style="color: #fff;">admin page</h1>
            <ul>
                <a href="../php/addmin-logout.php" class="button">logout</a>
            </ul>
        </nav>
<hr>
    <div class="admin-contents">
        <div class="content">
            <p>Total customers</p>
            <br>
            <?php 
            $cu = mysqli_query($conn,"SELECT * FROM customers");
            $cc = mysqli_num_rows($cu);
            ?>
            <span><?php echo $cc; ?></span>
            <a href="view-users.php" class="icons" style="background: var(--danger);">
                <i class="fas fa-users" style="margin-top:10px;"></i>
            </a>
        </div>
        <div class="content">
            <p>All catigories</p>
            <br><?php 
            $count_cat = mysqli_query($conn,"SELECT * FROM catigories");
            $counted_cat = mysqli_num_rows($count_cat);
            ?>
            <span><?php echo $counted_cat; ?></span>
            <a href="all-cat.php" class="icons">
                <i class="fas fa-list" style="margin-top:10px;"></i>
            </a>
        </div>
        <div class="content">
            <p>All items</p>
            <br>
            <?php 
            $count_items = mysqli_query($conn,"SELECT * FROM items");
            $counted_items = mysqli_num_rows($count_items);
            ?>
            <span><?php echo $counted_items; ?></span>
            <a href="" class="icons" style="background: var(--color1);">
                <i class="fas fa-cart-plus" style="margin-top:10px;"></i>
            </a>
        </div>
        <div class="content">
            <p>Customers request</p>
            <br>      <?php 
            $request = mysqli_query($conn,"SELECT * FROM request");
            $cr = mysqli_num_rows($request);
            ?>
            <span><?php echo $cr; ?></span>
            <a href="view-request.php" class="icons" style="background: var(--color2);">
                <i class="fas fa-book" style="margin-top:10px;"></i>
            </a>
        </div>
    </div>
    <hr style="margin: 20px 0;">
    <div class="admin-others">

        <div class="row-content">
        
        
           <div class="col-content">
               <a href="add-catigories.php" class="link">
                   <i class="fas fa-pen"></i>
                   <p><a href="add-catigories.php" class="edit">add catigories</a></p>
               </a>
           </div>

            <div class="col-content">
               <a href="all-cat.php" class="link">
                   <i class="fas fa-list"></i>
                   <p><a href="all-cat.php" class="edit">manage catigories</a></p>
               </a>
           </div>

           <div class="col-content">
               <a href="orders.php" class="link">
                   <i class="fas fa-cart-plus"></i>
                   <p><a href="orders.php" class="edit">orders</a></p>
               </a>
           </div>

           <div class="col-content">
               <a href="view-users.php" class="link">
                   <i class="fas fa-person"></i>
                   <p><a href="view-users.php" class="edit">all customer</a></p>
               </a>
           </div>

           <div class="col-content">
               <a href="view-request.php" class="link">
                   <i class="fas fa-book"></i>
                   <p><a href="view-request.php" class="edit">customer request</a></p>
               </a>
           </div>

          
          

        </div>

    </div> 
</body> 
</html>