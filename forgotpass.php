<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fpass.css" media="all" />
    <title>Forgot Password</title>
    <script>
        var check = function() {
            if (document.getElementById('cust_pass').value ===
                document.getElementById('cust_confirm_pass').value && document.getElementById('cust_pass').value.length != 0) {
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
        <h3 id=h3 style="text-align:center;"><u>RESET YOUR PASSWORD</u></h3>
        <form id="regis" action="" method="POST">
            <table align="center" style="margin-top: 25px;" width="400px" height="300px">
                <tr>
                    <td align="center"><b>Registered Email ID:</b></td>
                    <td align="center"><input type="email" name="cust_email" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>Registered Mobile No:</b></td>
                    <td align="center"><input type="text" name="cust_phone" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>New Password:</b></td>
                    <td align="center"><input type="password" name="cust_pass" id="cust_pass" required onkeyup="check();" /></td>
                </tr>
                <tr>
                    <td align="center"><b>Confirm New Password:</b></td>
                    <td align="center"><input type="password" name="cust_confirm_pass" id="cust_confirm_pass" required onkeyup="check();" /><br><span id='message'></span></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" class="btn-primary" name="reset" value="Confirm and Reset" />
                    <button class="btn-success" onclick="window.location='index.php'" ;>Back</button>
                    </td>
                </tr>
                
            </table>

        </form>
        
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

if (isset($_POST['reset'])) {
    $cust_email = $_POST['cust_email'];
    $cust_phone = $_POST['cust_phone'];
    $cust_pass = $_POST['cust_confirm_pass'];

    $checkcust = "SELECT * FROM customer WHERE cust_email = '$cust_email' AND cust_phone = '$cust_phone' ";

    $result = mysqli_query($conn, $checkcust);
    $num = mysqli_num_rows($result);

    if ($num === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['flag'] != 'Enable') {
            echo "<h5 style='text-align:center;'>Your Account Is Disabled, You cannot change your password!<h5>";
            exit();
        } else {

            $resetpass = "UPDATE customer SET cust_pass='" . $cust_pass . "' WHERE cust_email = '$cust_email' AND cust_phone = '$cust_phone'";

            $resetpassdb = mysqli_query($conn, $resetpass);

            if ($resetpassdb) {
                echo "<script>alert('Password changed successfully!')</script> ";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    } else {
        echo "<h5 style='text-align:center;'>User Doesn't Exists!<h5>";
        exit();
    }
}
?>