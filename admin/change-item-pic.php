<?php
  session_start();
  include_once '../php/config.php';
  require_once '../php/admin-validate.php';
  $msg = null;
  $edit_id = $_GET['catid'];

  $sql = mysqli_query($conn, "SELECT * FROM `items` WHERE item_id = '$edit_id'");
    $getitem = mysqli_fetch_array($sql);
    $edit_id = $getitem['item_id'];
    $i_photo = $getitem['photo'];

    if (isset($_POST['edit'])) {
        $i_photo = $_FILES['photo']['name'];
        $tmp_photo = $_FILES['photo']['tmp_name'];
        $local = "items-images/";
        move_uploaded_file($tmp_photo, $local.$i_photo);
        $edit = mysqli_query($conn, "UPDATE `items` SET photo = '$i_photo' WHERE item_id = '$edit_id'");
        if ($edit) {
            $msg = "<script>
                swal.fire(
              'Edit',
              'Successfully',
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
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body>
<?php echo $msg ?>
    <br><br>
        <center>
            <img src="items-images/<?php echo$i_photo;?>" style="width: 300px;
        height: 300px; border-radius: 50%;">
        </center>
        <br><br><br>
    <div class="add-container">
       <form method="post" enctype="multipart/form-data">
       <div class="add-form">
            <div class="add-field">
                <input type="file" name="photo">
            </div>
            <div class="send">
                <input type="submit" name="edit" value="Save Changes" style="width: 100%;
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