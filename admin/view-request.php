<?php
  session_start();
  include_once '../php/config.php';
  require_once '../php/admin-validate.php';

  if(isset($_GET['delid']))
    {
    $did= $_GET['delid'];
    $pic=$_GET['pic'];
    $dir="request-images"."/".$pic;
    $sql = mysqli_query($conn, "DELETE FROM `request` WHERE requestid = '$did'");
    unlink($dir);
    echo "<script>alert('Data deleted');</script>";      
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <script src="../icons/js/all.min.js"></script>
    <style type="text/css">
                /*================= 
            general selection 
        =================*/
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            text-decoration: none;
        }

        /*--------- storing colors in css variables ---------*/

        :root{
    --bg: #ffcc;
    --light2: #ffa366;
    --button: #ff6600;
    --text: #000;
    --light: #fff;
}
        body
        {
            background: var(--light2);
            width: 100%;
        }

        /*=========view users css=========*/
        .admin-user-list h1
        {
            color: var(--light);
            text-align: center;
            margin: 15px 0;
        }
        .board
        {
            padding: 10px 8px;
            width: 100%;
        }
        .board tr,th
        {
            border: 1px solid var(--light);
        }
        .board table
        {
            border: 1px solid var(--light);
            width: 100%;
            color: var(--light);
            /*overflow-x: auto;*/
        }
        .space
        {
            margin: 10px 0;
        }
        .photo-requested{
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        @media(max-width: 700px){
            .board
            {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <div class="home-button">
        <a href="home.php" style="float: left; color: var(--light); margin: 20px 0 0     20px; font-size: 30px;" class="home-btn"><i class="fas fa-arrow-left"></i></a>
    </div>
    <div class="admin-user-list">
        <h1>all customers request</h1>
        <div class="board">
            <table>

                <tr>
                    <th>s/n</th>
                    <th>customers name</th>
                    <th>item discription</th>
                    <th>item picture</th>
                    <th>manage</th>
                </tr>
                <?php
                $sn = 1;
                $s = mysqli_query($conn, "SELECT * FROM request");
                while ($row = mysqli_fetch_array($s)) {
                
                ?>
                <tr class="space">
                    <th><?php echo $sn++;?></th>
                    <th><?php echo $row['customer_id'];?></th>
                    <th><?php echo $row['discription'];?></th>
                    <th><img src="request-images/<?php echo $row['photo'];?>" alt='image is not available' class='photo-requested'></th>
                    <th><a onclick="return confirm('Are You Sure')" href='view-request.php?delid=<?php echo $row['requestid'];?>&&pic=<?php echo $row['photo'];?>' style='color: var(--light);'>delete</a></th>
                </tr>
            <?php } ?>
            </table>
        </div>

    </div>   
</body>
</html>