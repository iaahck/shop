<?php
 session_start();
 require_once '../php/config.php';
 require_once '../php/admin-validate.php';
   $msg = null;
    $orderid = $_GET['orderid'];
    $details = mysqli_query($conn, "SELECT * FROM `orders` WHERE orderid = '$orderid'");
    $get_user = mysqli_fetch_array($details);

    if (isset($_POST['status-set'])) {
        $s = $_POST['status'];
        $e = mysqli_query($conn, "UPDATE `orders` SET status = '$s' WHERE orderid = '$orderid'");
        if ($e) {
             $msg = "<script>
              swal.fire(
            'Edit',
            'Successfully',
            'success'
        )
          </script>";
        }else{
             $msg = "<script>
              swal.fire(
            'Sorry',
            'Something Wrong',
            'warning'
        )
          </script>";
        }
    }
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
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body style="background: var(--light2);">
<?php echo$msg; ?>
   <div class="home-button">
        <a href="orders.php" style="float: left; color: var(--light); margin: 20px 0 0 20px; font-size: 30px;" class="home-btn"><i class="fas fa-arrow-left"></i></a>
        </div>
    <div class="form-box-add">
        <header class="status-text">Delivery Status</header>
        <form method="post">
            <div class="status-box">
            <select name="status" style="width: 100%; border: 1px solid var(--light2); padding: 4px; color: var(--light2); outline: none;">
                    <option value="pending">pending</option>
                    <option value="delivered">delivered</option>
                </select>
            </div>

            <div class="status-send">
                <input type="submit" name="status-set" value="change">
            </div><br>
            <div class="status-send">
                <a href="trecking-status.php?orderid=<?php echo$orderid ?>" style='color: var(--light2); text-align: center;'>change treaking status</a>
            </div>
        </form>
    </div>
    

</body>
</html>