<div class="content_area" style="overflow:scroll; overflow-x:hidden;">
    <style>
        table {
            border: 2px solid black;
            width: 800px;
            height: 400px;
            margin: auto;
            margin-top: 20px;
        }

        td {
            border: 2px solid black;
            padding: 8px;

        }

        th {
            border: 2px solid black;
            padding: 15px;
            font-size: 20px;
        }

        .btn-success {
            font-size: 12px;
            padding: 3px;
            margin: 5px;

        }
    </style>

    <table>
        <thead>
            <tr>
                <th><u>Update Details</u></th>
            </tr>

        </thead>

        <tbody aria-rowspan="4">
            <form action="#" method="POST">
                <tr>
                    <td><b style="float:left;">1. Product Name:</b><input type="text" name="pname" style="float:right;" required /></td>
                </tr>
                <tr>
                    <td><b style="float:left;">2. Product Category:</b>
                        <div style="text-align: center;">
                        <select name="pcat" required style="float:right;">
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
                    <td><b style="float:left;">3. Product Description:</b><textarea name="pdesc" cols="20" rows="5" style="float:right;"></textarea></td>
                </tr>
                <tr>
                    <td><b style="float:left;">4. Listing Price:</b><input type="text" name="pprice" style="float:right;" required /></td>
                </tr>
                <tr>
                    <td><b style="float:left;">5. End Date:</b><input type="text" name="penddate" style="float:right;" required placeholder="mm-dd-yyyy"/></td>
                </tr>
                <tr>
                   <td> <input type="submit" class="btn-success" name="updatedet" value="Update" />
                   <button class="btn-success" onclick="window.location='home.php'";>Home</button>
                </td>
                </tr>
            </form>
        </tbody>


    </table>
</div>

<?php
if (isset($_POST['updatedet'])) {
    $p_id = $_GET['p_id'];
    $pname = $_POST['pname'];
    $pcat = $_POST['pcat'];
    $pdesc = $_POST['pdesc'];
    $pprice = $_POST['pprice'];
    $penddate = $_POST['penddate'];

    $updatedet = "UPDATE products SET product_name='".$pname."',product_cat='".$pcat."',product_desc='".$pdesc."',product_price='".$pprice."',product_date='".$penddate."' WHERE product_id=$p_id";
    $updatedetdb = mysqli_query($conn, $updatedet);
    if ($updatedetdb) {
        echo "<script>alert('Details has been updated successfully!')</script> ";
        echo "<script>window.open('structDetails.php?p_id=$p_id','_self')</script>";
    }
}
?>