<?php include_once 'php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
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
    --bg: #ffcc;
    --light2: #ffa366;
    --button: #ff6600;
    --text: #000;
    --light: #fff;
    --danger: #ff0000;
    --success: #00ff00;
}
/* :root{
    --bg: #ffcc;
    --light2: hsl(240, 50%, 65%);
    --button: #333399;
    --text: #000;
    --light: #fff;
} */
.main-body
{
    background: var(--light);
}
/*============= main content css =============*/
.main-content
{
    background: url(img/2.jpg);
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
/*------ navigation css ------*/
.navigation
{
    display: flex;
    justify-content: space-between;
    padding: 20px 25px;
}

.navigation .logo
{
    color: var(--button);
    font-size: 30px;
}
.navigation .button{
    background: var(--button);
    padding: 10px 15px;
    color: var(--light);
    border-radius: 20px 20px 0;
}


/*----- text area css -----*/
.text-area{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.text-area h1{
    font-size: 30px;
    text-align: center;
    color: var(--light);
    text-transform: capitalize;
    margin-bottom: 20px;
}
.text-area .button-1{
    background: var(--button);
    border: 2px solid var(--light);
    padding: 10px 15px;
    color: var(--light);
    margin-left: 100px;
}

/*------- all catigories css -------*/
.all-products
{
    padding: 20px;
    background: var(--light2);
}
.all-products h1
{
    margin: 20px 0;
    text-transform: capitalize;
    text-align: center;
    color: var(--light);
}
.catigories-container
{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 30px;
}
.catigories
{
    background: transparent;
    border: 1px solid var(--button);
    padding: 20px;
    text-align: center;
}
.catigories a
{
    color: var(--light);
    font-size: 30px;
    margin-bottom: 10px;
}
.catigories .items-img
{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.items-btn{
    text-align: center;
    margin: 20px;
}
.more
{
    color: var(--light);
}
.catigories .fas{
    font-size: 40px;
}
.allcat
{
    text-align: center;
    background: var(--light);
    color: var(--button);
    padding: 15px 25px;
}
.non
{
    margin-top: 50px;
    display: flex;
    justify-content: space-around;
    text-align: center;
    justify-content: center;
}
.non a
{
    text-align: center;
    margin-left: 10px;
    background: var(--light);
    color: var(--button);
    padding: 15px 25px;
}
.non p{
    color: var(--light);
    margin-right: 10px;
}


/*=========== contact css ===========*/
.contact
{
    padding: 20px;
    background: var(--light);
}
.contact h1
{
    margin: 20px 0;
    text-transform: capitalize;
    text-align: center;
    color: var(--button); 
}
.contact .row
{
    display: flex;
    justify-content: space-around;
}
.col p
{
    margin: 20px 0;
    text-transform: capitalize;
    text-align: center;
    color: var(--button); 
}
.col iframe
{
    border: 1px solid var(--button);
    width: 100%;
    height: 100%;
}
.contact .col
{
    flex-basis: calc(100% / 2);
}
.contact-form
{
    padding: 20px;
}
.contact-form .field
{
    display: flex;
    flex-direction: column;
    margin: 10px 0;
}
.field input
{
    height: 40px;
    width: 100%;
    border: 1px solid var(--button);
    padding-left: 8px;
    color: var(--button);
    outline: none;
    font-size: 20px;
}
.field textarea
{
    resize: none;
    width: 100%;
    border: 1px solid var(--button);
    padding: 8px;
    color: var(--button);
    outline: none;
    font-size: 20px;
}
.field ::placeholder
{
    color: var(--button);
}
.send input
{
    background: var(--button);
    width: 100%;
    padding: 10px;
    border: 1px solid var(--button);
    outline: none;
    font-size: 20px;
    color: var(--light);
}

/*=========== footer section css ===========*/

footer
{
    padding: 20px;
    background: var(--button);
    border-top-left-radius: 150px;
}
footer .row
{
    display: flex;
    justify-content: space-around;
}
footer .col
{
    flex-basis: calc(100% / 3);
    margin: 20px 0;
}
footer .col h3,footer .col-2 h3
{
    color: var(--light);
    display: block;
    color: var(--light);
    margin-top: 10px;
    margin-left: 12px;
}
footer .col a
{
    display: block;
    color: var(--light);
    margin-left: 12px;
}
footer .col-2 p
{
    display: block;
    color: var(--light);
    margin-left: 12px;
}

footer .social
{
    display: flex;
}
.social a
{
    margin-top: 25px;
    background: var(--light);
    color: var(--button) !important;
    border-radius: 20px;
    padding: 10px;
}
footer hr
{
    background: var(--light);
    margin-bottom: 20px;
}
footer .copy,.desingner
{
    color: var(--light);
    text-align: center;
    margin: 10px 0;
}


/*============= Mobile Responsive =============*/
@media(max-width: 700px){
    .text-area h1{
        font-size: 20px;
    }
    .text-area .button-1{
        padding: 8px 10px;
    }
    .catigories-container
    {
        grid-template-columns: repeat(1, 1fr);
    }
    .contact .row
    {
        flex-direction: column;
    }
    footer .row{
        flex-direction: column;
    }
    /*======== orders css ========*/
    .orders-container
    {
        flex-direction: column;
    }
    /* buy css */
    .items-container
    {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 30px;
    }
}
    </style>
    <script src="icons/js/all.min.js"></script>
</head>
<body>
    <div class="main-body">
        
    <!--=============== main content ===============-->
    <div class="main-content">

        <nav class="navigation">
            <h1 class="logo">delivert</h1>
            <ul>
                <a href="users/status.php" class="button">my orders</a>
            </ul>
        </nav>

        <!--============ text area content ============-->

        <div class="text-area">
            <h1>Your Lightning Fast Delivery Partner</h1>
            <a href="login.php" class="button-1">login</a>
        </div>

    </div>


    <!--========== all products section ==========-->
    <div class="all-products">
        <h1>some catigories</h1>
        <div class="catigories-container">            
            
            <?php
              $s = mysqli_query($conn, "SELECT * FROM catigories ORDER BY `catigoryname` DESC LIMIT 9");
              while ($row = mysqli_fetch_array($s)) {
             ?>
            <div class="catigories">
            <div class="card-image">
                <img style='height: 350px;object-fit: cover;width: 350px;' src="admin/catigories-images/<?php echo$row['catigory_image'];?>">
                </div>
                <a href="users/all-cart.php" class="more"><?php echo$row['catigoryname'] ?></a>
            </div>
            <?php } ?>

        </div>
        <br><br>
        <center>
        <div>
            <a href="users/all-cart.php" class="allcat">view all catigories</a>
        </div></center>

         <div class="non">
                <br><p>didin't find my choose <a href="" class="red">request</a></p>
            </div>

    </div>  
</div>

    <!--============ contact section ============-->

    <div class="contact" style="background: var(--light);">
        <h1>contact us</h1>
        <div class="row">
            <div class="col">
                <iframe src=""></iframe>
            </div>
            <div class="col">
                <p>send us a feedback</p>
                <div class="contact-form">
                    <form action="">
                        <div class="field input">
                            <input type="text" placeholder="isah abdulhameed ">
                        </div>
                        <div class="field input">
                            <input type="text" placeholder="isahck@gmail.com">
                        </div>
                        <div class="field input">
                            <input type="text" placeholder="test message">
                        </div>
                        <div class="field input">
                            <textarea name="" placeholder="testing message" cols="30" rows="9"></textarea>
                        </div>
                        <div class="send">
                            <input type="submit" value="send feddback">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--============== footer section ==============-->
    <footer>
        <div class="row">
            <div class="col">
                <h3>Links</h3>
                <a href="index.php"><span class="fas fa-star"></span> home</a>
                <a href="users/all-cart.php"><span class="fas fa-star"></span> items</a>
                <a href="register.php"><span class="fas fa-star"></span> register</a>
                <a href="login.php"><span class="fas fa-star"></span> login</a>
            </div>
            <div class="col-2">
                <h3>Address</h3>
                <p>plot 123</p>
                <p>new gra gombe</p>
                <p>gombe state</p>
            </div>
            <div class="col">
                <div class="social">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-telegram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copy">&copy;&nbsp;delivert</p>
        <p class="desingner">design by <a href="about-dev.php" style="color: var(--light);">isahck</a></p>
    </footer>

    </div>
</body>
</html>