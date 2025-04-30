<div class="sidebar" style="background-color: #93C572;">

    <h4 style="text-align: center; font-family:sans-serif;"><u>Admin Options</u></h4>
    <hr>
    <style>
        .button {
            background-color: white;
            border: solid 2px black;
            width: 250px;
            color: black;
            font-size: 20px;
            padding: 35px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 10px 10px;
            margin-left: 25px;
            cursor: pointer;
            border-radius: 16px;
            color: black;
            transition: .3s;
        }

        .button:hover {
            background-color: olivedrab;
            transition: .3s;
            color: white;
        }
    </style>


    <button class="button" onclick="window.location='insertproduct.php';">Insert Product</button>
    <br>
    <button class="button" onclick="window.location='StructMCats.php';">Add/Delete Category</button>
    <br>
    <button class="button" onclick="window.location='StructMReq.php';">Manage Requests</button>
    <br>
    <button class="button" onclick="window.location='StructMCust.php';">Manage Customers</button>


</div>