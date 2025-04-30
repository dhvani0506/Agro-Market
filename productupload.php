<?php

@include 'connection.php';



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
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/products.css">
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

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>