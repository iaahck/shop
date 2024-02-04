<?php
session_start();
include_once 'php/config.php';
$msg = null;
if (isset($_POST['login'])) {
    $e = $_POST['email'];
    $p = $_POST['password'];
    $l = mysqli_query($conn,"SELECT * FROM `customers` WHERE email = '$e' AND password = '$p'");
    $c = mysqli_fetch_array($l);
    if (mysqli_num_rows($l) > 0) {
        $_SESSION['customer_id'] = $e;
        header('location:users/home.php');
    }else{
       $msg = "<script>
              swal.fire(
            'failed',
            'incorect email or passwod',
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
    <link rel="stylesheet" href="css/login.css">
    <script src="icons/js/all.min.js"></script>
    <script src="javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body>
    <div class="login-body">
         <!--=========== login form ===========-->
         <div class="login-model">
            <div class="form-box login">
                <h2>login here</h2>
                <form method="post">
                    <?php echo $msg; ?>
                    <div class="input-box">
                        <input type="text" placeholder="email address" name="email">
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="your password" name="password">
                    </div>

                    <div class="remember-me">
                        <label class="check"><input type="checkbox">remember me</label>
                        <a href="" class="forget">forget password</a>
                       </div>
                    <input type="submit" class="btn" name="login" value="login">

                    <div class="login-register">
                        <p class="donthave">Don't have an acount <a href="register.php" class="register-link">create</a></p>

                    </div>
                    <br>
                    <div>
                        <p style="text-align: center;"><a href="admin/login.php" style="color: var(--light2); background: var(--light); margin: 0 8px; padding:5px;">Managements Login</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>