<?php
session_start();
require_once '../php/config.php';
require("../php/validate.php");
require_once '../php/data.php'; 
$msg = null;
$msg = "<script>
        swal.fire(   
        'Please Call <br/> 098765432',
        'If You Have Any Problems',
        'info'
    )
        </script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="../icons/js/all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body>
    <?php echo$msg; ?>
    <div class="home">
        <nav class="navigation">
            <h1 class="user"><?php echo$n; ?></h1>
            <ul>
                <a href="logout.php" class="button">logout</a>
            </ul>
        </nav>


        <div class="all-products">
            <div class="catigories-container">
                <div class="catigories">
                    <a href="all-cart.php"><i class="fa fa-cart-plus"></i></a>
                    <br>
                    <a href="all-cart.php" class="more">make orders</a>
                </div>
                <div class="catigories">
                    <a href="status.php"><i class="fa fa-list"></i></a>
                    <br>
                    <a href="status.php?customer_id=<?php echo $row['customer_id'];?>" class="more">my orders</a>
                </div>
    
                <div class="catigories">
                    <a href="profile.php"><i class="fas fa-user-pen"></i></a>
                    <br>
                    <a href="profile.php" class="more">profile settings</a>
                </div>

                <div class="catigories">
                    <a href="trace_order.php"><i class="fas fa-location"></i></a>
                    <br>
                    <a href="trace_order.php" class="more">track order</a>
                </div>

                <div class="catigories">
                    <a href="request.php"><i class="fas fa-hand"></i></a>
                    <br>
                    <a href="request.php" class="more">request items</a>
                </div>
              
        </div>
    


    </div>
</body>
</html>