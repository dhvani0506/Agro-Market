<div class='content_area' style="overflow:scroll;  background: white center url(logo-removebg-preview.png) no-repeat;">

    <?php
    $get_products = "SELECT * FROM products ORDER BY RAND()";
    $run_products = mysqli_query($conn, $get_products);

    while ($row_pro = mysqli_fetch_array($run_products)) {

        $pro_id = $row_pro['product_id'];
        $pro_name = $row_pro['product_name'];
        $pro_cat = $row_pro['product_cat'];
        $pro_price = $row_pro['product_price'];
        $pro_image = $row_pro['product_image'];
        $pro_desc = $row_pro['product_desc'];


        echo " <div id='items' style= 'border: 2px solid; border-radius:10px; '>
    <h5 id='h5'>$pro_name</h5>
    
    <img src='Images/$pro_image' width='160' height='120'/>

    <p style= 'padding-top: 10px'><b>Listing Price</b> Rs.$pro_price </p>
     
    <p style= 'padding-top: 10px'>1.&nbsp;<a href='structDetails.php?p_id=$pro_id'><b>Details</b></a></p>
    
    <p style= 'padding-top: 10px'>2.&nbsp;<a href='deletepro.php?p_id=$pro_id'><b>Delete</b></a></p>

    
   </div>
    
    ";

        if (isset($_POST['bid_button'])) {

            echo "<script>alert('Your Bid Has Been Placed')</script> ";
            echo "<script>window.open('home.php','_self')</script>";
        }
    }

    ?>



</div>