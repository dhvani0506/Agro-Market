<div class="content_area" style="overflow:scroll;  background: white;">

    <?php

    $c_id = $_SESSION['cust_id'];
    $get_user = "SELECT * FROM customer WHERE cust_id = '$c_id'";
    $run_user = mysqli_query($conn, $get_user);

    while ($row_pro = mysqli_fetch_array($run_user)) {

        $cust_name = $row_pro['cust_name'];
        $cust_email = $row_pro['cust_email'];
        $cust_phone = $row_pro['cust_phone'];

        echo " <div style='padding-top:10px';>
        <h3 style='font-size: 30px;margin-left:400px;'><u>My Profile</u></h3>
        <p style= 'padding: 5px'><b>1.&nbspName :</b>&nbsp;$cust_name</p>
        
        <p style= 'padding: 5px'><b>2.&nbspEmail Address :</b>&nbsp;$cust_email</p>
        
        <p style= 'padding: 5px'><b>3.&nbspContact Number :</b>&nbsp;$cust_phone</p>
        <hr>
        </div>
        ";
    }
    ?>
<button class="btn-success" onclick="window.location='home.php';" style="margin-left: 400px;">Home</button>
</div>

