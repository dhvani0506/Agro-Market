<div class="content_area" style="overflow:scroll;  background: white;">

  <?php

  $c_id = $_SESSION['cust_id'];

  $get_bids = "SELECT * FROM products,bids WHERE products.product_id=bids.p_id AND cust_id=$c_id  ORDER BY bid_id";
  $run_bids = mysqli_query($conn, $get_bids);


  echo " 

    
<table class='table' style='table-layout:fixed;'>
  <tr>
  <th>Bid Id.</th>
  <th>Product Name</th>
  <th>Product Image</th>
  <th>Product Category</th>
  <th>Listed Price</th>
  <th>Bid Amount</th>
  <th>Action</th>
</tr>
</table>

";

  while ($row_pro = mysqli_fetch_array($run_bids)) {

    $bid_id = $row_pro['bid_id'];
    $pro_name = $row_pro['product_name'];
    $pro_cat = $row_pro['product_cat'];
    $pro_price = $row_pro['product_price'];
    $pro_image = $row_pro['product_image'];
    $bid_amount = $row_pro['bid_amount'];


    echo " 
    
    
    <table class='table' style='table-layout:fixed;'>
      <tr>
      <td class='bw'>$bid_id</td>
      <td class='bw'>$pro_name</td>
      <td class='bw'><img src='Admin/Images/$pro_image' width='100' height='100'/></td>
      <td class='bw'>$pro_cat</td>
      <td class='bw'>Rs.$pro_price</td>
      <td class='bw'>Rs.$bid_amount</td>
      <td><a href='delete.php?id=$bid_id'>Delete</a></td>
    </tr>
    
      
    
  </table>
  ";
  }
  echo "<h5 style='font-size: 15px; float:right; margin-right:10px;'><u><a href='home.php'>Go Back</a></u></h5>";
  ?>
<style>
        .bw {
            word-wrap: break-word;
            max-width: 1px;
        }

        
    </style>


</div>