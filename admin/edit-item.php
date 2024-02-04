<?php
  session_start();
  include_once '../php/config.php';
  require_once '../php/admin-validate.php';
  $msg = null;
  $edit_id = $_GET['catid'];

  $sql = mysqli_query($conn, "SELECT * FROM `items` WHERE item_id = '$edit_id'");
    $getitem = mysqli_fetch_array($sql);
    $edit_id = $getitem['item_id'];
    $i_name = $getitem['item_name'];
    $dis = $getitem['discription'];
    $i_photo = $getitem['photo'];

    if (isset($_POST['edit-cat'])) {
        $i_name = $_POST['item_name'];
        $i_des = $_POST['discription'];
        $edit = mysqli_query($conn, "UPDATE `items` SET item_name = '$i_name',discription = '$i_des' WHERE item_id = '$edit_id'");
        if ($edit) {
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
            <img src="items-images/<?php echo$i_photo;?>" style="width: 300px;
        height: 300px; border-radius: 50%;">
        </center>
        <br><br><br>
    <div class="add-container">
       <form method="post">
       <div class="add-form">
            <h2>edit item</h2>
            <a href="change-item-pic.php?catid=<?php echo $getitem['item_id'];?>" class="change-btn" style='text-align: center; padding: 5px 10px; color: var(--light); margin-top: 10px; background: var(--wait)'>change picture</a><br>
            <div class="add-field">
                <input type="text" name="item_name" value="<?php echo$i_name; ?>">
            </div>
            <div class="add-field">
                <input type="text" name="discription" value="<?php echo$dis; ?>">
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