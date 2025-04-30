<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="custreg.css" media="all" />
    <title>Registration</title>
    <script>
        var check = function() {
            if (document.getElementById('Admin_pass').value ===
                document.getElementById('Admin_confirm_pass').value && document.getElementById('Admin_pass').value.length != 0) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password Matching';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password Not Matching';
            }
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <h1 id=h1 style="text-align:center;"><u> Online Auction and Bidding</u></h1>
        <hr>
    </div>
    <div class="container">
        <h3 id=h3 style="text-align:center;"><u> CREATE YOUR ACCOUNT</u></h3>
        <form id="regis" action="" method="POST">
            <table align="center" style="margin-top: 25px;" width="400px" height="300px">
                <tr>
                    <td align="center"><b>Full Name:</b></td>
                    <td align="center"><input type="text" name="Admin_name" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>Email ID:</b></td>
                    <td align="center"><input type="email" name="Admin_email" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>Mobile No:</b></td>
                    <td align="center"><input type="text" name="Admin_phone" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>Password:</b></td>
                    <td align="center"><input type="password" name="Admin_pass" id="Admin_pass" required onkeyup="check();" /></td>
                </tr>
                <tr>
                    <td align="center"><b>Confirm Password:</b></td>
                    <td align="center"><input type="password" name="Admin_confirm_pass" id="Admin_confirm_pass" required onkeyup="check();" /><br><span id='message'></span></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" class="btn-primary" name="register" value="Create" /></td>
                </tr>

            </table>
        </form>
        <h5 style="font-size: 15px;"><u>Already Registered?<a href="index.php">Go To Login<a></u></h5>
    </div>
    <div class="img">
            <img src="Admin/misc/logo.png" alt="" id="l1">

        </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['register'])) {
    $Admin_name = $_POST['Admin_name'];
    $Admin_email = $_POST['Admin_email'];
    $Admin_phone = $_POST['Admin_phone'];
    $Admin_pass = $_POST['Admin_confirm_pass'];
    $flag = "Enable";

    $reg = "SELECT * FROM admin_db WHERE Admin_email = '$Admin_email' AND Admin_pass = '$Admin_pass' ";

    $result = mysqli_query($conn, $reg);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "<h5 style='text-align:center;'>User Already Exist<h5>";
    } else {
        $insert_admin = "insert into admin_db (Admin_name,Admin_email,Admin_phone,Admin_pass,flag) values
    ('$Admin_name','$Admin_email','$Admin_phone','$Admin_pass','$flag')";

        $cust_db = mysqli_query($conn, $insert_admin);

        if ($cust_db) {
            echo "<script>alert('Account has been created successfully!')</script> ";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
}
?>