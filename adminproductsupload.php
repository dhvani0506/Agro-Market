<?php

@include 'connection.php';

// if(isset($_POST['add_to_cart'])){

//    $product_name = $_POST['product_name'];
//    $product_price = $_POST['product_price'];
//    $product_image = $_POST['product_image'];
//    $product_quantity = 1;

//    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

//    if(mysqli_num_rows($select_cart) > 0){
//       $message[] = 'product already added to cart';
//    }else{
//       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
//       $message[] = 'product added to cart succesfully';
//    }

// }



if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `product` WHERE productid = '$remove_id'");
   
};



?>



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
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>



<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `product`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="<?php echo $fetch_product['productimage']; ?>" alt="">
            <h3><?php echo $fetch_product['productname']; ?></h3>
            <p><?php echo $fetch_product['note']; ?></p>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['productname']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['productimage']; ?>">
            <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart"> -->

            <a href="admin_update.php?edit=<?php echo $row['productid']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
            <a href="adminproducts.php?remove=<?php echo $fetch_product['productid']; ?>" onclick="return confirm('remove product from your products?')" class="btn"> <i class="fas fa-trash"></i> remove</a>
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>