<?php
  session_start();
  include_once '../php/config.php';
  require_once '../php/admin-validate.php';
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
        <h1>all customers list</h1>
        <div class="board">
            <table>

                <tr>
                    <th>s/n</th>
                    <th>customers name</th>
                    <th>customers email</th>
                    <th>customers number</th>
                    <th>customers registration date</th>
                </tr>
                <?php
                $sn = 1;
                $s = mysqli_query($conn, "SELECT * FROM customers");
                while ($row = mysqli_fetch_array($s)) {
                
                ?>
                <tr class="space">
                    <th><?php echo $sn++;?></th>
                    <th><?php echo $row['name'];?></th>
                    <th><?php echo $row['email'];?></th>
                    <th><a style="color: var(--light);" href="tel:+234<?php echo $row['mobile'];?>"><?php echo $row['mobile'];?></a></th>
                    <th><?php echo $row['registered_date'];?></th>
                </tr>
            <?php } ?>
            </table>
        </div>

    </div>   
</body>
</html>