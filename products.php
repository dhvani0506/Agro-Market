<?php
@include 'connection.php';
// session_start();

// if(!isset($_SESSION['user_name'])){
//     echo "<script>alert('You are Loggedout')</script>";
//     header('location:login.php');
// }

session_start();
$user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// };

// if(isset($_GET['logout'])){
//    unset($user_id);
//    session_destroy();
//    header('location:login.php');
// };



if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
       $message[] = 'product added to cart!';
    }
 
 };


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

if(isset($message)){
   foreach($message as $message){
      // echo '<script><div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      echo "<script>alert('$message')</script>"; 
   };
};

?>




        <?php
            include_once 'header.php';
        ?>
    <div class="heading1">
        <h1 class="heading"></h1>
    </div>
    <section class="feature" id="feature">
    <div class="heading1">
        <h1 class="heading">Our<span>Products</span></h1>
    </div>
        <div class="filter-menu">
            <div class = "filter-btns">
                <button type = "button" class = "filter-btn" id = "all">All</button>
                <button type = "button" class = "filter-btn" id = "veg">Vegetables</button>
                <button type = "button" class = "filter-btn" id = "fru">Fruits</button>
                <button type = "button" class = "filter-btn" id = "gra">Grains</button>
            </div>
        </div>
<!--old product upload-->        
        <?php
            // include_once 'productupload.php';
        ?>

<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <?php
      
      // $select_products = mysqli_query($conn, "SELECT * FROM `product`");
      // if(mysqli_num_rows($select_products) > 0){
      //    while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <!-- <form action="" method="post">
         <div class="box">
            <img src="<?php echo $fetch_product['productimage']; ?>" alt="">
            <h3><?php echo $fetch_product['productname']; ?></h3>
            <p>Location : <?php echo $fetch_product['note']; ?></p>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['productname']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['productimage']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form> -->

      <?php
      //    };
      // };
      ?>

<?php
      $select_product = mysqli_query($conn, "SELECT * FROM `product`");
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
      <form method="post" class="box" action="">
         <img src="<?php echo $fetch_product['productimage']; ?>" alt="">
         <h3><?php echo $fetch_product['productname']; ?></h3>
         <p>Location : <?php echo $fetch_product['note']; ?></p>
         <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['productname']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['productimage']; ?>">
         <input type="submit" class="btn" value="add to cart" name="add_to_cart">
      </form>
   <?php
      };
   };
   ?>



   </div>

</section>

</div>

<!--old product upload-->   



    </section>


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