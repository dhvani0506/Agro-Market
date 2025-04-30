<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="#" media="all" />
    <title>Insert Product</title>
</head>

<body>
    <form action="insertproduct.php" method="POST" enctype="multipart/form-data">

        <table align="center" border="2px" width=600px height=500px style="margin-top: 30px;">
            <tr>
                <td colspan="2" align="center">
                    <h3>Insert Product</h3>
                </td>
            </tr>

            <tr>
                <td>1.Product Name:</td>
                <td align="center"><input type="text" name="product_name" required /></td>
            </tr>

            <tr>
                <td>2.Product Category:</td>
                <td>
                    <div style="text-align: center;">
                        <select name="product_cat" required>
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
                <td align="center"><input type="text" name="product_price" required placeholder="In Rupees" /></td>
            </tr>

            <tr>
                <td>4.Product Description:</td>
                <td align="center"><textarea name="product_desc" cols="20" rows="5"></textarea></td>
            </tr>

            <tr>
                <td>5.Product Image:<br><span style="font-size: 10px;">(Only jpg, jpeg and png are supported)</span></td>
                <td align="center"><input type="file" name="product_image" required /></td>
            </tr>

            <tr>
                <td>6.Auction Creation Date:</td>
                <td align="center"><input type="date" name="curr_date" required /></td>
            </tr>

            <tr>
                <td>7.Auction End Date:</td>
                <td align="center"><input type="date" name="end_date" required placeholder="DD-MM-YYYY" /></td>
            </tr>

            <tr>
                <td align="center" colspan="2"><input type="submit" class="btn-success" name="product_insert" value="Add Product" />
                    <button class="btn-success" onclick="window.location='home.php'" ;>Back</button>
                </td>
            </tr>

        </table>




    </form>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['product_insert'])) {
    $product_name = $_POST['product_name'];
    $product_cat = $_POST['product_cat'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $auct_date = $_POST['curr_date'];
    $product_date = $_POST['end_date'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
    $product_image_error = $_FILES['product_image']['error'];

    $imageExt = explode('.', $product_image);
    $imageActualExt = strtolower(end($imageExt));
    $allowedExt = array('jpg', 'jpeg', 'png');

    if (in_array($imageActualExt, $allowedExt)) {
        if ($product_image_error === 0) {
            $product_image_new = uniqid('', false) . "." . $imageActualExt;
            move_uploaded_file($product_image_tmp, 'Images./' . $product_image_new);
        } else {
            echo "<script>alert('There was an error uploading your file!')</script>";
            exit();
        }
    } else {
        echo "<script>alert('Unsupported Image(File) Type!')</script>";
        exit();
    }

    $insert_product = "insert into products (product_name,product_cat,product_price,product_desc,end_date,auction_date,product_image) values
    ('$product_name','$product_cat','$product_price','$product_desc','$product_date','$auct_date','$product_image_new')";

    $insert_db = mysqli_query($conn, $insert_product);

    if ($insert_db) {
        echo "<script>alert('Product has been inserted successfully!')</script>";
        echo "<script>window.open('insertproduct.php','_self')</script>";
    }
}
?>