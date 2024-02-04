<?php
 session_start();
 require_once '../php/config.php';
 require '../php/validate.php';
 require '../php/data.php';
$msg = null;

if (isset($_POST['find'])) {
    $f_order = $_POST['treck'];

    $find = mysqli_query($conn,"SELECT * FROM orders WHERE orderid ='$f_order'");
    if (mysqli_num_rows($find) > 0) {
        header("location:treck.php?orderid=$f_order");
    }else{
        $msg = "<script>
            swal.fire(
          'Sorry',
          'Failed To Find Your Item',
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
    <title>user dashboard</title>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <div class="change-password">  
        <div class="change-container">
            <?php echo$msg; ?>
            <div class="change-header">trace my order</div>
            <form method="post">
                <div class="change-field">
                    <label>Enter You Tracking Id</label>
                    <input type="text" name="treck" requred>
                </div>
                <div class="save-field">
                    <input type="submit" name="find" value="Find">
                </div>
            </form>
        </div>
    </div>

</body>
</html>