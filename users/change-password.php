<?php
 session_start();
 require_once '../php/config.php';
 require '../php/validate.php';
 require '../php/data.php';
$msg = null;
if (isset($_POST['change'])) {
    $op=$_POST['oldpass'];
    $np=$_POST['newpass'];
    if (empty($op) && empty($np)) {
        $msg = "<script>
              swal.fire(
            'failed',
            'old and new password are empty',
            'warning'
        )
          </script>";
    }else{
    if ($op == $p) {
        $sql = mysqli_query($conn, "UPDATE `customers` SET password = '$np' WHERE customer_id = '$cid'");
        header('location:profile.php');
    }
    else{
        $msg = "<script>
              swal.fire(
            'failed',
            'password mismatch',
            'warning'
        )
          </script>";
    }
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
            <div class="change-header">change password</div>
            <form method="post">
                <div class="change-field">
                    <label>Old Password</label>
                    <input type="text" name="oldpass" requred>
                </div>
                <div class="change-field">
                    <label>New Password</label>
                    <input type="text" name="newpass" requred>
                </div>
                <div class="save-field">
                    <input type="submit" name="change" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>
</html>