<div class="content_area" style="overflow:scroll">

  <?php
  if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];
    $get_products = "SELECT *, MAX(bid_amount) FROM products,bids WHERE products.product_id=bids.p_id AND product_id = '$p_id'";
    $run_products = mysqli_query($conn, $get_products);

    while ($row_pro = mysqli_fetch_array($run_products)) {

      $pro_id = $row_pro['product_id'];
      $pro_name = $row_pro['product_name'];
      $pro_cat = $row_pro['product_cat'];
      $pro_price = $row_pro['product_price'];
      $pro_image = $row_pro['product_image'];
      $pro_desc = $row_pro['product_desc'];
      $pro_date = $row_pro['end_date'];
      $auc_date = $row_pro['auction_date'];
      $max_bid = $row_pro['MAX(bid_amount)'];
      
      echo " <div style='padding-top:10px';>


    <img src='Images/$pro_image' width='400px' height = '300px' style='border:1px solid black; margin-left:250px;'/>
    
    <p style= 'padding: 5px'><b>1.&nbsp;Product Name :</b>&nbsp;$pro_name</p>
    
    <p style= 'padding: 5px'><b>2.&nbsp;Product Category :</b>&nbsp; $pro_cat</p>
    
    <p style= 'padding: 5px'><b>3.&nbsp;Product Description :</b>&nbsp; $pro_desc</p>

    <p style= 'padding: 5px'><b>4.&nbsp;Listing Price :</b>&nbsp; Rs. $pro_price </p>

    <p style= 'padding: 5px'><b>5.&nbspMinimum Bid = (Highest Bid + 1) :</b>&nbsp; $max_bid+1 </p>

    <p style= 'padding: 5px'><b>6.&nbspAuction Created On :</b>&nbsp; $auc_date </p>

    <h5 style='font-size: 15px;margin-left:5px;'><u><a href='structBidHist.php?p_id=$pro_id'>Bid History</a></u></h5>
   
   <h5 style='color:red; margin-left:480px;'>End Time:</h5><p style='margin-left:460px;' id='date'></p>
 

<script>

var countDownDate = new Date('$pro_date').getTime();


var x = setInterval (function() {


  var now = new Date().getTime();
    
 
  var distance = countDownDate - now;
    

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
 
  document.getElementById('date').innerHTML = days + 'd ' + hours + 'h '
  + minutes + 'm ' + seconds + 's ';
    
  
  if (distance < 0) {
    clearInterval(x);
    document.getElementById('date').innerHTML = 'AUCTION CLOSED';
    document.getElementById('bid_button').disabled = true;
  }

}, 1000);
</script>
  <h5 style='font-size: 15px;margin-left:480px;'><u><a href='StructEditD.php?p_id=$p_id'>Edit Details</a></u></h5>
  <h5 style='font-size: 15px;margin-left:500px;'><u><a href='home.php'>Home</a></u></h5>
    </div>
    ";
    }
  }

  ?>
</div>