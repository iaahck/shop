<?php
  session_start();
  include_once '../php/config.php';
  require_once '../php/admin-validate.php';
  $msg = null;
  if (isset($_POST['add'])) {
      $cid = uniqid('cat/');
      $catname = $_POST['catigoryname'];
      $cat_photo = $_FILES['cat_image']['name'];
      $tmp_photo = $_FILES['cat_image']['tmp_name'];
      $local = "catigories-images/";
      move_uploaded_file($tmp_photo, $local.$cat_photo);
      $add = mysqli_query($conn,"INSERT INTO `catigories` (catid,catigoryname,catigory_image) VALUES ('$cid','$catname','$cat_photo')");
      if ($add) {
          echo $msg = "<script>
              swal.fire(
            'add',
            'successfully',
            'success'
        )
          </script>";
        //   header("location:home.php");
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
    <script src="../icons/js/all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body>
    <?php echo $msg ?>
    <div class="home-button">
        <a href="home.php" style="float: left; color: var(--light); margin: 20px 0 0 20px; font-size: 30px;" class="home-btn"><i class="fas fa-arrow-left"></i></a>
        </div>
    <div class="add-container all">
       <form method="post" enctype="multipart/form-data">
       <div class="add-form">
            <h2>add catigory</h2>
            <div class="add-field">
                <input type="text" name="catigoryname" placeholder="catigory name" require>
            </div><br>
            <div class="add-field">
                <input type="file" name="cat_image" require>
            </div>

            <div class="send">
                <input type="submit" name="add" value="add catigory" style="width: 100%;
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