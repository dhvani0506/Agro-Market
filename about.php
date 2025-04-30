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
    <link rel="stylesheet" href="css/about.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <title>Document</title>
</head>
<body>
    <!--Header-->
        <?php
            include_once 'header.php';
        ?>
    <!--Header-->

<div class="about"> 
    <div class="main">
       <img src="img/logo9.jpg" width="1500px" height="400px" class="logo">

       <div class="imgtext"> 
         <h1> About Us </h1>
       </div>
    </div>
</div>

    <div class="content-about">
        <div class="main1">
        <h1> Argo-Market </h1>
        <p class="text"> Lorem ipsum dolor sit, amet consectetur adipisicing<br> elit. Voluptas, natus eligendi mollitia ad, <br>qui minima voluptates aliquam odit quasi<br> debitis alias iste aspernatur et,<br> nam consectetur adipisci non? Illum, possimus!</p>
        </div>
    </div>

<div class="container">
  <div class="section-title">
      <h1>Our Team</h1>
  </div>

  <div class="row">


    <div class="column">
        <div class="team">
            <div class="team-img">
                <img src="img/logo11.jpeg" alt="Team Image">
            </div>
            <div class="team-content">
                <h2>Dhvani Patel</h2>
                <h3>CEO & Founder</h3>
                <p>Some text goes here that describes about team members</p>
                <h4>dhvanipatel@gmail.com</h4>
            </div>
            <div class="team-social">
                <a href="#" class="social-tw"> <i class="fa fa-twitter"></i></a>
                <a href="#" class="social-fb"> <i class="fa fa-facebook"></i></a>
                <a href="#" class="social-in"> <i class="fa fa-instagram"></i></a>
                <a href="#" class="social-yt"> <i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="team">
            <div class="team-img">
                <img src="img/logo10.jpeg" alt="Team Image">
            </div>
            <div class="team-content">
                <h2>Aayush Patel</h2>
                <h3>Art Director</h3>
                <p>Some text goes here that describes about team members</p>
                <h4>aayushpatel@gmail.com</h4>
            </div>
            <div class="team-social">
                <a href="#" class="social-tw"> <i class="fa fa-twitter"></i></a>
                <a href="#" class="social-fb"> <i class="fa fa-facebook-f"></i></a>
                <a href="#" class="social-in"> <i class="fa fa-instagram"></i></a>
                <a href="#" class="social-yt"> <i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="team">
            <div class="team-img">
                <img src="img/logo12.jpeg" alt="Team Image">
            </div>
            <div class="team-content">
                <h2>Samarth Patel</h2>
                <h3>CO-Founder</h3>
                <p>Some text goes here that describes about team members</p>
                <h4>Samarthpatel@gmail.com</h4>
            </div>
            <div class="team-social">
                <a href="#" class="social-tw"> <i class="fa fa-twitter"></i></a>
                <a href="#" class="social-fb"> <i class="fa fa-facebook-f"></i></a>
                <a href="#" class="social-in"> <i class="fa fa-instagram"></i></a>
                <a href="#" class="social-yt"> <i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="team">
            <div class="team-img">
                <img src="img/logo13.jpeg" alt="Team Image">
            </div>
            <div class="team-content">
                <h2>Krish Patel</h2>
                <h3>Designer</h3>
                <p>Some text goes here that describes about team members</p>
                <h4>krishpatel@gmail.com</h4>
            </div>
            <div class="team-social">
                <a href="#" class="social-tw"> <i class="fa fa-twitter"></i></a>
                <a href="#" class="social-fb"> <i class="fa fa-facebook-f"></i></a>
                <a href="#" class="social-in"> <i class="fa fa-instagram"></i></a>
                <a href="#" class="social-yt"> <i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>

</div>

  

</div>





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