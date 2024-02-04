<?php
  session_start();
  include_once '../php/config.php';
  require_once '../php/admin-validate.php';
  $msg = null;
  
  $cid = $_GET['catid'];

  $sql = mysqli_query($conn, "SELECT * FROM catigories WHERE catid = '$cid'");
    $row = mysqli_fetch_array($sql);
    $cid = $row['catid'];
    $catname = $row['catigoryname'];
    $cat_photo = $row['catigory_image'];

    if (isset($_POST['edit-cat'])) {
        $catname = $_POST['catigoryname'];
        $edit = mysqli_query($conn, "UPDATE `catigories` SET catigoryname = '$catname' WHERE catid = '$cid'");
        if ($edit) {
            echo $msg = "<script>
                swal.fire(
              'Edit',
              'successfully',
              'success'
          )
            </script>";
            header("location:all-cat.php");
        }else{
            $msg = "<script>
                swal.fire(
              'something',
              'wrong',
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
    <title>admin</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body>
    <?php echo $msg ?>
    <br><br>
        <center>
            <img src="catigories-images/<?php echo$cat_photo;?>" style="width: 300px;
        height: 300px;object-fit: cover; border-radius: 50%;">
        </center>
        <br><br><br>
    <div class="add-container">
       <form method="post">
       <div class="add-form">
            <h2>edit catigory</h2>
            <a href="change-cat-pic.php?catid=<?php echo$cid;?>" class='change-btn' style="text-align: center; padding: 5px 10px; color: var(--light); margin-top: 10px; background: var(--wait);">change picture</a><br>
            <div class="add-field">
                <input type="text" name="catigoryname" value="<?php echo$catname; ?>">
            </div>
            <div class="send">
                <input type="submit" name="edit-cat" value="Save Changes" style="width: 100%;
                height: 30px;
                text-align: center;
                padding: 5px 10px;
                color: var(--light);
                margin-top: 10px;
                background: var(--light2);">
            </div>
        </div>
       </form>
    </div>
</body>
</html>