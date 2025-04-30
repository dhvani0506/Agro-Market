<div class="content_area" style="overflow:scroll">

<form action="" method="POST" enctype="multipart/form-data">

    <table align="center" border="2px" width=650px height=600px style="margin: auto; margin-top:20px;">
        <tr>
            <td colspan="2" align="center">
                <h3>Put Your Product For Auction</h3>
            </td>
        </tr>

        <tr>
            <td>1.Product Name:</td>
            <td align="center"><input type="text" name="p_name" required /></td>
        </tr>

        <tr>
            <td>2.Product Category:</td>
            <td>
                <div style="text-align: center;">
                    <select name="p_category" required>
                        <option value="" default>Select a category</option>
                        <?php
                        $cats = "SELECT * FROM categories";
                        $run_query = mysqli_query($conn, $cats);

                        while ($row_cats = mysqli_fetch_assoc($run_query)) {

                            $cat_id = $row_cats['cat_id'];
                            $cat_name = $row_cats['cat_name'];

                            echo "<option value='$cat_name'>$cat_name</option>";
                        }
                        ?>
                    </select>
                </div>


            </td>

        </tr>

        <tr>
            <td>3.Product Price:</td>
            <td align="center"><input type="text" name="p_price" required placeholder="In Rupees" /></td>
        </tr>

        <tr>
            <td>4.Product Description:</td>
            <td align="center"><textarea name="p_desc" cols="20" rows="5" placeholder="Keep It Short"></textarea></td>
        </tr>

        <tr>
            <td>5.Product Image:<br><span style="font-size: 10px;">(Only jpg, jpeg and png are supported)</span></td>
            <td align="center"><input type="file" name="p_image" required /></td>
        </tr>

        <tr>
            <td>6.End Date:</td>
            <td align="center"><input type="text" name="p_enddate" required placeholder="mm-dd-yyyy" /></td>
        </tr>

        <tr>
            <td align="center" colspan="2"><input type="submit" class="btn-success" name="product_request" value="Add Request" />
                <button class="btn-success" onclick="window.location='home.php'" ;>Back</button>
            </td>
        </tr>

    </table>
</form>
</div>
<?php

if (isset($_POST['product_request'])) {

    $c_email = $_SESSION['cust_email'];

    $p_name = $_POST['p_name'];
    $p_category = $_POST['p_category'];
    $p_price = $_POST['p_price'];
    $p_desc = $_POST['p_desc'];
    $p_enddate = $_POST['p_enddate'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp = $_FILES['p_image']['tmp_name'];
    $p_image_error = $_FILES['p_image']['error'];

    $imageExt = explode('.', $p_image);
    $imageActualExt = strtolower(end($imageExt));
    $allowedExt = array('jpg', 'jpeg', 'png');

    if (in_array($imageActualExt, $allowedExt)) {
        if ($p_image_error === 0) {
            $p_image_new = uniqid('', false) . "." . $imageActualExt;
            move_uploaded_file($p_image_tmp, "Admin/RequestImages/$p_image_new");
        } else {
            echo "<script>alert('There was an error uploading your file!')</script>";
            exit();
        }
    } else {
        echo "<script>alert('Unsupported Image(File) Type!')</script>";
        exit();
    }

    $request_product = "insert into requests (pname,pcategory,pprice,pdesc,penddate,pimage,cust_email) values
    ('$p_name','$p_category','$p_price','$p_desc','$p_enddate','$p_image_new','$c_email')";

    $request_db = mysqli_query($conn, $request_product);

    if ($request_db) {
        echo "<script>alert('Request has been recorded successfully! Updates will be send on your email!')</script> ";
        echo "<script>window.open('structReq.php','_self')</script>";
    }
}

?>