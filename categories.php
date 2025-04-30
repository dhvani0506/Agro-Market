<div class="content_area" style="overflow:scroll;  background: white center url(logo-removebg-preview.png) no-repeat;">

<?php 

if(isset($_GET['cat_name'])){
    $cat_name = $_GET['cat_name'];

$get_cats = "SELECT * FROM products WHERE product_cat = '$cat_name'";
$run_cats = mysqli_query($conn,$get_cats);

while($row_pro=mysqli_fetch_array($run_cats)){

    $pro_id = $row_pro['product_id'];
    $pro_name = $row_pro['product_name'];
    $pro_cat = $row_pro['product_cat'];
    $pro_price = $row_pro['product_price'];
    $pro_image = $row_pro['product_image'];
    $pro_desc = $row_pro['product_desc'];

    echo " <div id='items' style= 'border: 2px solid; border-radius:5px;'>
    <h5 width='100' height='100'>$pro_name</h5>
    
    <img src='Images/$pro_image' width='160' height='120'/>
    
    <p style= 'padding-top: 10px'><b>Listing Price</b> Rs.$pro_price </p>
     
    <p style= 'padding-top: 10px'><a href='structDetails.php?p_id=$pro_id'><b>Click Here For Details</b></a></p>

   </div>
    
    ";
    
    if (isset($_POST['bid_button'])){
        
        echo "<script>alert('Your Bid Has Been Placed')</script> ";
        echo "<script>window.open('home.php','_self')</script>";
        
        
    }

 
}
}

?>



</div>