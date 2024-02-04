<?php
  session_start();
  include_once '../php/config.php';
  require_once '../php/validate.php';
  require_once '../php/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
    <link rel="stylesheet" href="../css/status.css">
    <script src="../icons/js/all.min.js"></script>
</head>
<body>
<div class="home-button">
        <a href="home.php" style="float: left; color: var(--light); margin: 20px 0 0 20px; font-size: 30px;" class="home-btn"><i class="fas fa-arrow-left"></i></a>
      </div>
    <div class="admin-user-list">
        <h1>My All Orders List</h1>
        <div class="board">
            <table>
                <tr>
                    <th>s/n</th>
                    <th>item name</th>
                    <th>order date</th>
                    <th>status</th>
                    <th>manage</th>
                </tr>
                <?php
                $sn = 1;
                $s = mysqli_query($conn, "SELECT * FROM `orders` WHERE customer_id = '$row[customer_id]' ORDER BY regdate DESC");
                while ($buy_items = mysqli_fetch_array($s)) {
                
                ?>
                <tr class="space">
                    <td><?php echo $sn++;?></td>
                    <td>
                        <?php  
                        $sq = mysqli_query($conn, "SELECT * FROM items WHERE item_id='".$buy_items['buyitem']."'");
                        $sf = mysqli_fetch_array($sq);
                        echo $sf['item_name'];
                        ?>
                    </td>
                    <td><?php echo $buy_items['regdate'];?></td>
                    <td><a href="" class="status-user"><?php echo $buy_items['status'];?></a></td>
                    <td>
                        <a style="color: var(--light);" href="full-order.php?orderid=<?php echo $buy_items['orderid'];?>" >view full details</a>
                    </td>
                </tr>
            <?php } ?>
            </table>
        </div>

    </div>   
</body>
</html>