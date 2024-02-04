<?php
session_start();
include_once '../php/config.php';
if (isset($_POST['login'])) {
    $e = $_POST['username'];
    $p = $_POST['password'];

    if (!empty($e) && !empty($p)) {
        $l = mysqli_query($conn,"SELECT * FROM `admin` WHERE username = '$e' AND password = '$p'");
        $c = mysqli_fetch_array($l);
        if (mysqli_num_rows($l)>=1) {
            $_SESSION['admin_session'] = $_POST['username'];
            header('location:home.php');
        }else{
            echo 'incorect username and pass';
        }
    }else{
        echo 'all empty';
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
    <link rel="stylesheet" href="../css/login.css">
    <script src="../icons/js/all.min.js"></script>
    <script src="../javascript/model.js"></script>
</head>
<body>
    <div class="login-body">
         <!--=========== login form ===========-->
         <div class="login-model">
            <div class="form-box login">
                <h2>Admin login</h2>
                <form method="post">
                    <div class="input-box">
                        <input type="text" placeholder="username address" name="username">
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
                </form>
            </div>

        </div>
    </div>
</body>
</html>