<div class="content_area" style="overflow:scroll; overflow-x:hidden; background-color:white;">
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
                <th><u>Name</u></th>
                <th><u>E-Mail</u></th>
                <th><u>Phone No.</u></th>
                <th><u>User Status</u></th>
                <th><u>Action</u></th>
            </tr>

        </thead>

        <tbody>
            <?php
            $fetchcust = "SELECT * FROM customer";
            $runfetchcust = mysqli_query($conn, $fetchcust);

            while ($row_pro = mysqli_fetch_array($runfetchcust)) {

                $cust_id = $row_pro['cust_id'];
                $cust_name = $row_pro['cust_name'];
                $cust_email = $row_pro['cust_email'];
                $cust_phone = $row_pro['cust_phone'];
                $flag = $row_pro['flag'];

                echo "<tr>
                <td><b><i>$cust_name</b></i></td>
                <td><b><i>$cust_email</b></i></td>
                <td><b><i>$cust_phone</b></i></td>
                <td><b><i>$flag</b></i></td>
                <td>1.&nbsp;<a href='deletecust.php?cust_id=$cust_id'>Delete</a>
                <br>
                    2.&nbsp;<a href='userstatusen.php?cust_id=$cust_id'>Enable</a>
                <br>
                    3.&nbsp;<a href='userstatusdis.php?cust_id=$cust_id'>Disable</a>
                </td>
                    </tr>";
            }

            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <button class="btn-success" onclick="window.location='home.php'" ;>Back</button>
                </td>
            </tr>

        </tfoot>

    </table>
</div>