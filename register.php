<?php
include_once 'php/config.php';
$msg = null;
if (isset($_POST['register'])) {
    $ci = uniqid('customer/');
    $n = $_POST['name'];
    $e = $_POST['email'];
    $m = $_POST['mobile'];
    $p = $_POST['password'];
    $a = $_POST['address'];

    if (!empty($n) && !empty($e) &&!empty($m) &&!empty($p) && !empty($a)) {
        $e_check = mysqli_query($conn,"SELECT * FROM customers WHERE email = '$e' OR mobile = ' $m'");
        if (mysqli_num_rows($e_check) > 0) {
            $msg ="<script>
            swal.fire(
            'Sorry',
            'Email Or Number Already Exist',
            'warning'
            )
            return true;
        </script>";
        header('location:login.php');
        }else{
            $i = mysqli_query($conn,"INSERT INTO `customers`(customer_id,name,email,mobile,password,address) VALUES ('$ci','$n','$e','$m','$p','$a')");
            if ($i) {
                $msg = "<script>
                swal.fire(
                'Account',
                'Create Successfully',
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
    }else{
        $msg = "<script>
            swal.fire(
            'Sorry',
            'All Fields Are Required',
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
    <link rel="stylesheet" href="css/reg.css">
    <script src="icons/js/all.min.js"></script>
    <script type="text/javascript" src="javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body>
    <?php echo $msg; ?>
    <div class="login-body">
         <!--=========== login form ===========-->
         <div class="reg-model">
            <div class="register">
                <h2>register here</h2>
                <form method="post">
                    <div class="input-box">
                        <input type="text" placeholder="your name" name="name">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="email address" name="email">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="mobile number" name="mobile">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="your password" name="password">
                    </div>
                     <div class="input-box">
                        <input type="text" placeholder="your address" name="address">
                    </div>
                    <input type="submit" class="btn" name="register" value="register">
                    <div class="login-register">
                        <p class="donthave">already have an acount <a href="login.php" class="register-link">login</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>