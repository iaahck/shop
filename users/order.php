<?php
 session_start();
 require_once '../php/config.php';
 require_once '../php/validate.php';
 require_once '../php/data.php';
    $items = $_GET['item_id'];
    $_SESSION['item_id'] = $items;
    $details = mysqli_query($conn, "SELECT * FROM `items` WHERE item_id = '$items'");
    $del = mysqli_fetch_array($details);
    $msg = null;
    $mes = null;
    // inserting order items
    if (isset($_POST['order'])) {
        $user_id = $_POST['customer_id'];
        $name = $_POST['customer_name'];
        $my_order = uniqid('trace_order/');
        $buy = $_POST['buyitem'];
        $deliver_address = $_POST['address'];
        $m = $_POST['mobile'];
        $order = $_POST['order_quality'];
        $s = "pending";
        $s1 = "pending";
        $com = mysqli_query($conn,"INSERT INTO orders (customer_id,name,orderid,buyitem,address,mobile,order_quality,status,status1) VALUES ('$user_id','$name','$my_order','$buy','$deliver_address','$m','$order','$s','$s1')");
        if ($com) {
           $msg = "<script>
            swal.fire(
          'complete',
          'you have successfuly order please wait for our confirmation',
          'success'
        )
        </script>";
        $mes = $my_order;
        }else{
        $msg = "<script>
            swal.fire(
            'failed',
            'sorry something went wrong !!!',
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
    <title>user dashboard</title>
    <link rel="stylesheet" href="../css/order.css">
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../javascript/sweet-alert/sweetalert2.all.js"></script>
    <script src="../icons/js/all.min.js"></script>
</head>
<body style="background: var(--light2);">
<div class="back-btn" style="margin: 15px;">
<a href="home.php">
    <i style="font-size: 35px;color: var(--light);" class="fas fa-home"></i>
</a>
</div>
    <div class="orders">
       <div class="orders-container">
           <div class="col">
              <center>
                   <img src="../admin/items-images/<?php echo$del['photo'] ?>" class="order-pic">
              </center>
                <center>
                    <br>
                 <h2 style="color: var(--light);"><?php echo$del['item_name'] ?></h2><br>
                 <h2 style="color: var(--light);"><?php echo$del['discription'] ?></h2>
                </center>
      </div>
      <br><br>
      <?php echo$msg; ?>
           <div class="col">
               <div class="form">
                   <form method="post">
                       <div class="field-1">
                        <div class="field" style="display: none;">
                            <input type="text" name="buyitem" value="<?php echo$del['item_id'];?>" hidden>
                            <input type="text" name="customer_id" value="<?php echo$row['customer_id'];?>" hidden>
                            <input type="text" name="customer_name" value="<?php echo$row['name'];?>" >
                        </div>
                            

                        <div class="field">
                            <label>Enter Your Address</label>
                            <input type="text" name="address" maxlength="50" placeholder="Enter Address" required="required">
                        </div>

                        <div class="field">
                            <label>Enter Your Mobile Number</label>
                            <input type="text" name="mobile" maxlength="15" placeholder="09134585734" required="required">
                        </div>


                        <div class="field">
                            <label>Enter Quantity</label>
                            <input type="number" name="order_quality" max-lenght="5" start="1" placeholder="enter amoung" required="required">
                        </div>

                    </div>

                    <div class="order-button">
                        <input type="submit" name="order" value="complete order">
                    </div>

                   </form>
               </div>
           </div>
       </div>
    </div>
</body>
</html>