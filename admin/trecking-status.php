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
        $e = mysqli_query($conn, "UPDATE `orders` SET status1 = '$s' WHERE orderid = '$orderid'");
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
        <header class="status-text">Trecking status</header>
        <form method="post">
            <label style="color: var(--light2); margin: 3px 5px;">Trecking Status</label>
            <div class="status-box">
                
                <input type="text" name="status" value="<?php echo$get_user['status1'];?>">
            </div>
            <div class="status-send">
                <input type="submit" name="status-set" value="change">
            </div>
        </form>
    </div>
    

</body>
</html>