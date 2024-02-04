<?php
 session_start();
 require_once '../php/config.php';
 require_once '../php/admin-validate.php';
 if(empty($_GET['catid'])){
    header("location:all-cat.php");
 }
    $msg = null;
    $catid = $_GET['catid'];
    $_SESSION['catid'] = $catid;
    $details = mysqli_query($conn, "SELECT * FROM catigories WHERE catid = '$catid'");
    $row = mysqli_fetch_array($details);

    if (isset($_POST['add'])) {
        $item_id = uniqid('items/');
        $item_name = $_POST['item_name'];
        $item_des = $_POST['discription'];
        $item_photo = $_FILES['photo']['name'];
        $tmp_photo = $_FILES['photo']['tmp_name'];
        $local = "items-images/";
        move_uploaded_file($tmp_photo, $local.$item_photo);
        $in = mysqli_query($conn, "INSERT INTO `items` (item_id, item_name, discription,photo,item_cat) VALUES ('$item_id', '$item_name','$item_des','$item_photo','$catid')");
        if ($in) {
            $msg = "<script>
            swal.fire(
            'Add',
            'Successfully',
            'success'
            )
        </script>";
        }else{
            $msg = "<script>
            swal.fire(
            'Sorry',
            'something wrong',
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
    <link rel="stylesheet" href="../css/add.css">
    <script src="../icons/js/all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
</head>
<body style="background: var(--light2);">
<?php echo$msg;?>
    <!--========== all products section ==========-->
    <div class="all-products">
    <div class="home-button">
        <a href="all-cat.php" style="float: left; color: var(--light); margin: 20px 0 0     20px; font-size: 30px;" class="home-btn"><i class="fas fa-arrow-left"></i></a>
        <a href="#add" style="float: right; color: var(--light); margin: 20px 0 0 20px; font-size: 30px;" class="home-btn">Add<i class="fas fa-plus"></i></a>&nbsp;
    </div>
        <h1><?php echo$row['catigoryname']; ?></h1>
        <div class="items-container">
        <?php
            $sql = mysqli_query($conn, "SELECT * FROM `items` WHERE item_cat='$catid' ORDER BY add_date DESC");
            $get_items = mysqli_num_rows($sql);
            while ($items = mysqli_fetch_array($sql)) {
            
            ?>
            <div class="items-card">
                <div class="card">
                    <div class="card-body" class="item-img">
                        <img style="height: 350px;object-fit: cover;width: 350px;" src="items-images/<?php echo$items['photo'];?>">
                    </div>
                    <div class="card-footer">
                        <p class="discription"><?php echo $items['item_name']; ?></p>
                        <a href="edit-item.php?catid=<?php echo $items['item_id'];?>" class='buy-item'>edit</a>
                        <a onclick="return confirm('Are You Sure')" href='delete-item.php?delid=<?php echo $items['item_id'];?>&&pic=<?php echo $items['photo'];?>' class='buy-item'>delete</a>
                    </div>
                </div>
            </div>
                <?php } ?>

            
            </div>
        </div>
        <br>

        <hr><br><br><br><br><br>
        <div class="add-container" id="add">
                <header class="add-text">add item</header>
            <form method="post" enctype="multipart/form-data">
                <div class="add-field">
                    <label>name</label>
                    <input type="text" name="item_name" require>
                </div>
                <div class="add-field">
                    <label>discription</label>
                    <input type="text" name="discription" require>
                </div>
                <div class="add-field">
                    <label>image</label>
                    <input type="file" name="photo" require>
                </div>
                <div class="save-field">
                    <input type="submit" name="add" value="add">
                </div>
             </form>
             <br><br>
             <div class="operations">
                <a href="edit-cat.php?catid=<?php echo $row['catid'];?>" class='links'>edit catigories</a>
                <a onclick="return confirm('Are You Sure')" href="delet-cat.php?delid=<?php echo $row['catid'];?>" class='links'>delete catigories</a>
            </div>
            </div>
 
</body>
</html>