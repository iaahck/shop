<?php
 session_start();
 require_once '../php/config.php';
 require '../php/validate.php';
 require '../php/data.php';
 $msg = null;

$editid = $_GET['customer_id'];
if (isset($_POST['edit'])) {
   $n = $_POST['name'];
   $e = $_POST['email'];
   $m = $_POST['mobile'];
   $a = $_POST['address'];

  $ins = mysqli_query($conn, "UPDATE `customers` SET name = '$n', email = '$e',mobile = '$m',address ='$a' WHERE customer_id = '$cid'");
  if ($ins) {
    $_SESSION['id'] = $_POST['email'];
    header('location:profile.php');
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
    <link rel="stylesheet" href="../css/profile.css">
    <script src="../icons/js/all.min.js"></script>
</head>
<body>
    <div class="home-button">
        <a href="profile.php" style="float: left; color: var(--light); margin: 20px 0 0     20px; font-size: 30px;" class="home-btn"><i class="fas fa-arrow-left"></i></a>
    </div>
	
<div class="change-password">
        <div class="change-container">
            <?php echo$msg; ?>
            <div class="change-header">Edit Your Profile</div>
            <form method="post">
                <div class="change-field">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $n;; ?>" requred>
                </div>
                <div class="change-field">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo$e; ?>" requred>
                </div>
                <div class="change-field">
                    <label>Mobile</label>
                    <input type="text" name="mobile" value="<?php echo$m; ?>" requred>
                </div>
                <div class="change-field">
                    <label>Address</label>
                    <input type="text"  name="address" value="<?php echo$a; ?>" requred>
                </div>
                <div class="save-field">
                    <input type="submit" name="edit" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>
</html>