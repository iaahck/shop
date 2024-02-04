<?php
 session_start();
 require_once '../php/config.php';
 require '../php/validate.php';
 require '../php/data.php';
 $msg = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user dashboard</title>
    <script src="../icons/js/all.min.js"></script>
    <style>
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
        --success: #00ff00;
        --danger: #ff0000;
        --bg: #ffcc;
        --light2: #ffa366;
        --button: #ff6600;
        --text: #000;
        --light: #fff;
        --color1: #f008f0;
        --color2:rgb(16, 63, 214)0;
    }
        /* :root{
            --bg: #ffcc;
            --light2: hsl(240, 50%, 65%);
            --button: #333399;
            --text: #000;
            --light: #fff;
            --h1: font-size: 40px;
        } */
        body
        {
            background: var(--light2);
        }
        /*============ user profile css ============*/
        .user-profile .user-header
        {
            color: var(--light);
            border-bottom: 5px solid var(--light);
            text-align: left;
            font-size: 20px;
            font-weight: bold;
            padding: 2px 8px;
        }
        .user-profile .user-board
        {
            position: absolute;
            top: 60%;
            left: 50%;
            width: 500px;
            transform: translate(-50%,-50%);
            background: var(--light);
            padding: 40px 60px; 
        }
        .user-center
        {
            align-content: center;
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .user-center .avater
        {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            z-index: 10;
        }
        .user-board table
        {
            width: 100%;
            color: var(--light2);
        }
        .user-board h1
        {
            color: var(--light2);
            text-align: center;
        }
        .user-board th,tr,td
        {
            border-bottom: 1px solid var(--light2);
            font-size: 20px;
        }
        .edit-buttons
        {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: flex;
            justify-content: space-around;
        }
        .edit-buttons a{
            color: var(--light2);
            margin: 0 10px;
            font-size: 15px;
            padding: 8px 5px;
            background: var(--light);
            text-transform: capitalize;
        }
        /* responsib */
        @media (max-width: 700px){
            .user-center .avater
            {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                z-index: 10;
            }
            .user-profile .user-board
            {
                width: 300px;
                transform: translate(-50%,-50%);
                background: var(--light);
                padding: 20px 40px; 
            }
            .edit-buttons a{
                margin: 0 6px;
                font-size: 15px;
                padding: 5px;
            }
            
        }

    </style>
</head>
<body>
    <div class="home-button">
        <a href="home.php" style="float: left; color: var(--light); margin: 20px 0 0     20px; font-size: 30px;" class="home-btn"><i class="fas fa-home"></i></a>
    </div>
	<div class="user-profile"> 
        <div class="user-center">
        <img src="../img/update profile.jpg" class="avater"> 
        </div>  
    <div class="user-board">
        <table>
                <h1>profile details</h1>
                <tr>
                    <td>name: </td>
                    <td><?php echo $n;?></td>
                </tr>
                <tr>
                    <td>email: </td>
                    <td><?php echo $e;?></td>
                </tr>
                <tr>
                    <td>mobile: </td>
                    <td><?php echo $m;?></td>
                </tr>
                <tr>
                    <td>address: </td>
                    <td><?php echo $a;?></td>
                </tr>
            </table>
    </div>

    <div class="edit-buttons">
        <a href="edit-profile.php? customer_id=<?php echo $row['customer_id'];?>"><i class="fa fa-pen"></i>&nbsp;edit</a>
        <a href="change-password.php"><i class="fa fa-key"></i>&nbsp;change password</a>
    </div>
       
    </div>
</body>
</html>