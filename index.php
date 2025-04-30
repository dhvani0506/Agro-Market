<?php
@include 'connection.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};




$query = mysqli_query($conn, "SELECT * FROM `user_form` WHERE `id` = '$user_id'");
$fetch = mysqli_fetch_array($query);
$row = mysqli_num_rows($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Code For Font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Code For Linking CSS-->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <title>Document</title>
</head>
<body>
    <!--Header-->
    <?php
        include_once 'header.php';
    ?>
    <!--Header-->

    <!--Home-->
        <section class="home" id="home">
            <div class="content">
                <h3>Fresh And <span>Organic</span> Organic Products For You</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet excepturi ipsa molestias sint. Soluta ad dicta tempora similique deleniti deserunt.</p>
                <p>Hello <?php echo $fetch['name']; ?></p>
                <a href="logout.php" class="btn">LogOut</a>
            </div>
        </section>
    <!--Home-->
    
    <!-- Feature-->
        <section class="feature" id="feature">
            <h1 class="heading">Our<span>Features</span></h1>

            <div class="box-container">
                <div class="box">
                    <img src="img/logo2.jpg"/>
                    <h3>Fresh And Organic</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, aut?</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="box">
                    <img src="img/logo2.jpg"/>
                    <h3>Fresh And Organic</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, aut?</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="box">
                    <img src="img/logo2.jpg"/>
                    <h3>Fresh And Organic</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, aut?</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </section>
    <!--Feature-->
    
    <!--Product-->
    <?php
        include_once 'productupload.php';
    ?>
    <!--Product-->


    <!--Blogs-->
    
    <!--Blogs-->

    <!--footer-->
    <!-- <section class="footer">
        <div class="box-container">
            <div class="box">
                <img src="img/logo2.jpg"/>
                <p>Lorem ipsum dolor sit amet consectetur ad Porro, deserunt.</p>
                <div class="share">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#" class="link"><i class="fa fa-phone"></i> +1234567890</a>
                <a href="#" class="link"><i class="fa fa-phone"></i> +1234567890</a>
                <a href="#" class="link"><i class="fa fa-envelope"></i> abc@gamil.com</a>
                <a href="#" class="link"><i class="fa fa-map-marker"></i> Gujarat,India</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <div class="links">
                    <a href="index.html" class="link"><i class="fa fa-arrow-right"></i>Home</a>

                    <a href="#" class="link"><i class="fa fa-arrow-right"></i>About Us</a>

                    <a href="products.html" class="link"><i class="fa fa-arrow-right"></i>Products</a>

                    <a href="blogs.html" class="link"><i class="fa fa-arrow-right"></i>Blogs</a>
                    
                    <a href="#" class="link"><i class="fa fa-arrow-right"></i>Contact Us</a>
                </div>
            </div>

            <div class="box">
                <h3>News Letter</h3>
                <p>Suscribe For Latest Update</p>
                <input type="email" placeholder="Your Email" class="email"/>
                <input type="submit" value="Suscribe" class="btn"/>
            </div>
        </div>
    </section> -->
    <!--footer -->
    
    <?php
        include_once 'footer.php';
    ?>    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <script src="js/script.js"></script>
    <script src="js/filterproduct.js"></script>

</body>
</html>