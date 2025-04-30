<?php

@include 'connection.php';

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `order` WHERE id = '$remove_id'");
   header('location:adminorders.php');
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
   <!-- <link rel="stylesheet" href="css/cart.css"> -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <link rel="stylesheet" href="css/order.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
<?php

include 'adminheader.php';

?>



<div class="container">

<section class="products">
<h1 class="heading" style="color:white;">.</h1>
   <h1 class="heading">My<span>Orders</span></h1>

   <div class="box-container">

      <?php
      
      $select_order = mysqli_query($conn, "SELECT * FROM `order`");
      if(mysqli_num_rows($select_order) > 0){
         while($fetch_order = mysqli_fetch_assoc($select_order)){
      ?>

      <form action="" method="post">
         <div class="box">
            <!-- <img src="<?php echo $fetch_order['productimage']; ?>" alt=""> -->
            <h3>Name:-<?php echo $fetch_order['name']; ?></h3>
            <p>Mobile No.:-<?php echo $fetch_order['number']; ?></p>
            <p>Email:-<?php echo $fetch_order['email']; ?></p>
            <p>Method:-<?php echo $fetch_order['method']; ?></p>
            <p>Flat:-<?php echo $fetch_order['flat']; ?></p>
            <p>Street:-<?php echo $fetch_order['street']; ?></p>
            <p>City:-<?php echo $fetch_order['city']; ?></p>
            <p>State:-<?php echo $fetch_order['state']; ?></p>
            <p>Country:-<?php echo $fetch_order['country']; ?></p>
            <p>Pincode:-<?php echo $fetch_order['pin_code']; ?></p>
            <p>Total Products:-<?php echo $fetch_order['total_products']; ?></p>
            <h3>$<?php echo $fetch_order['total_price']; ?>/-</h3>
           
            <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart"> -->
            <a href="admin_update.php?edit=<?php echo $row['productid']; ?>" class="btn"> <i class="fas fa-edit"></i> Approve </a>
            <!-- <a href="admin_page.php?delete=" class="btn"> <i class="fas fa-trash"></i> delete </a> -->
            <a href="adminorders.php?remove=<?php echo $fetch_order['id']; ?>" onclick="return confirm('remove order from your oreders?')" class="btn"> <i class="fas fa-trash"></i> remove</a>
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>
<?php

include 'adminfooter.php';

?>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>