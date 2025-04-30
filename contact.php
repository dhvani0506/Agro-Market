<?php
@include 'connection.php'
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
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <title>Contact Us</title>
       
    </head>
    <body>

    <?php
   include_once 'header.php';
?>

<h1 class="heading">.</h1>
        <div class="contactUs"> 
        <div class="heading1">
        <h1 class="heading">Get In<span>Touch</span></h1>
    </div>
            <div class="box1">
                <!--form-->
                <div class="contact form">
                    <h3>Send A Message</h3>
                    <form>
                        <div class="formbox">

                            <div class="row50">
                                <div class="inputbox">
                                    <span>First Name</span>
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="inputbox">
                                    <span>Last Name</span>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputbox">
                                    <span>Email</span>
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="inputbox">
                                    <span>Mobile Number </span>
                                    <input type="text" placeholder="Number">
                                </div>
                            </div>

                                <div class="row100">
                                    <div class="inputbox">
                                        <span>Message</span>
                                        <textarea placeholder="Write Your Message Here...."  ></textarea>
                                    </div>
                                </div>

                                <div class="row100">
                                    <div class="inputbox">
                                        <input type="Submit" value="send">
                                    </div> 
                                </div>
                        </div>
                    </form>
                </div>
                <!--info-->
                <div class="contact info">
                    <h3>
                        Contact info
                    </h3>
                    <div class="infobox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                    <p>vadodara , Gujarat <br> India </p>                    
                    </div>
                    <div>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <a href="mailto:dhvani0506@gmail.com">dhvani0506@gmail.com</a>            
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+91 701 65 175 4"> +91 7016517547 </a>            
                    </div>
                    <ul class="sco">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon> </a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a> </li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    </ul>
                </div>
                </div>
                 <!--map-->
                <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236213.40020443362!2d73.17308624999997!3d22.32210265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ab91a3ddab%3A0xac39d3bfe1473fb8!2sVadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1679215931610!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 <script src="js/script.js"></script>
 <script src="js/filterproduct.js"></script>

 <?php
   include_once 'footer.php';
?>
    </body>    
</html>