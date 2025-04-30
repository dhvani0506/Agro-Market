<div class="content_area" style="overflow:scroll; background-color:white;">

    <?php

    $get_reqs = "SELECT * FROM requests ORDER BY id";
    $run_reqs = mysqli_query($conn, $get_reqs);

    echo " 

  <table class='table' style='table-layout:fixed;'>
  <tr>
  <th>Customer Email</th>
  <th>Product Name</th>
  <th>Product Image</th>
  <th>Product Category</th>
  <th>Initial Price</th>
  <th>Description</th>
  <th>End Date</th>
  <th>Action</th>
</tr>
</table>

";

    while ($row_pro = mysqli_fetch_array($run_reqs)) {
        $id = $row_pro['id'];

        $c_email = $row_pro['cust_email'];
        $p_name = $row_pro['pname'];
        $p_image = $row_pro['pimage'];
        $p_category = $row_pro['pcategory'];
        $p_price = $row_pro['pprice'];
        $p_desc = $row_pro['pdesc'];
        $p_enddate = $row_pro['penddate'];

        echo " 
    <table class='table' style='table-layout:fixed; overflow:hidden'>
      <tr>
      <td class='bw'>$c_email</td>
      <td class='bw'>$p_name</td>
      <td><img src='RequestImages/$p_image' width='100' height='100'/></td>
      <td class='bw'>$p_category</td>
      <td class='bw'>Rs.$p_price</td>
      <td class='bw'>$p_desc</td>
      <td class='bw'>$p_enddate</td>
      <td><a href='deletereq.php?id=$id'>Delete</a></td>
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