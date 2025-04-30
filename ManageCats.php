<div class="content_area" style="overflow:scroll; overflow-x:hidden; background-color:white; ">
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
                <th><u>Categories</u></th>
                <th><u>Action</u></th>
            </tr>

        </thead>

        <tbody>
            <?php
            $fetchcat = "SELECT * FROM categories";
            $runfetchcat = mysqli_query($conn, $fetchcat);

            while ($row_pro = mysqli_fetch_array($runfetchcat)) {

                $cat_id = $row_pro['cat_id'];
                $cat_name = $row_pro['cat_name'];

                echo "<tr>
                <td><i><b>->&nbsp;$cat_name</b></i></td>
                <td><a href='deletecat.php?cat_id=$cat_id'>Delete</a></td>
            </tr>";
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <form action="#" method="POST">
                        <b>Insert New Category:</b>&nbsp;<input type="text" name="newcat" required />
                        <input type="submit" class="btn-success" name="catinsert" value="Add Category" />
                    </form>

                    <button class="btn-success" onclick="window.location='home.php';">Back</button>
                </td>
            </tr>

        </tfoot>


    </table>
</div>

<?php
if (isset($_POST['catinsert'])){
$newcat = $_POST['newcat'];

$insertnewcat = "Insert into categories (cat_name) values ('$newcat')";
$insertcatdb = mysqli_query($conn,$insertnewcat);


if ($insertcatdb) {
    echo "<script>alert('Category has been inserted successfully!')</script> ";
    echo "<script>window.open('StructMCats.php','_self')</script>";
}
}
?>