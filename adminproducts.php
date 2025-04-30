<?php

// session_start();

// if(!isset($_SESSION['admin_name'])){
//     "<script>alert('You are Loggedout')</script>";
//     header('location:login.php');
// }

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
        <?php
            include_once 'adminheader.php';
        ?>
    <div class="heading1">
        <h1 class="heading"></h1>
    </div>
    <section class="feature" id="feature">
    <div class="heading1">
        <h1 class="heading">My<span>Products</span></h1>
    </div>
        <div class="filter-menu">
            <div class = "filter-btns">
                <button type = "button" class = "filter-btn" id = "all">All</button>
                <button type = "button" class = "filter-btn" id = "veg">Vegetables</button>
                <button type = "button" class = "filter-btn" id = "fru">Fruits</button>
                <button type = "button" class = "filter-btn" id = "gra">Grains</button>
            </div>
        </div>
        
        <?php
            include_once 'adminproductsupload.php';
        ?>
    </section>


    <!--footer-->

        <?php
            include 'adminfooter.php';
        ?>

    <!--footer-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <script src="js/script.js"></script>
    <script src="js/filterproduct.js"></script>


</body>
</html>