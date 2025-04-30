<?php

// session_start();

// if(!isset($_SESSION['user_name'])){
//     echo "<script>alert('You are Loggedout')</script>";
//     header('location:login.php');
// }

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
    <link rel="stylesheet" href="css/blogs.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <title>Document</title>
</head>
<body>
    <!--Header-->
        <?php
            include_once 'header.php';
        ?>
    <!--Header-->


    <!--Blogs-->
    <section class="blogs">
        <h1 class="heading">Our<span>Blogs</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="img/logo2.jpg"/>
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fa fa-user"></i> By User</a>
                        <a href="#"><i class="fa fa-calender"></i> By User</a>
                    </div>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, exercitationem.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <img src="img/logo2.jpg"/>
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fa fa-user"></i> By User</a>
                        <a href="#"><i class="fa fa-calender"></i> By User</a>
                    </div>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, exercitationem.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <img src="img/logo2.jpg"/>
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fa fa-user"></i> By User</a>
                        <a href="#"><i class="fa fa-calender"></i> By User</a>
                    </div>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, exercitationem.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs-->





    <!--footer-->
        <?php
            include_once 'footer.php';
        ?>
    <!--footer-->
    












    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/filterproduct.js"></script>


    
</body>
</html>    