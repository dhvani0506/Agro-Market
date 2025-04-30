<div class="content_area" style="overflow:scroll;  background: white;">
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

    <div class="container">
        <h3 id=h3 style="text-align:center;"><u>Update Profile</u></h3>
        <form id="regis" action="" method="POST">
            <table align="center" style="margin-top: 25px; margin-left:250px" width="400px" height="300px">
                <tr>
                    <td align="center"><b>New Name:</b></td>
                    <td align="center"><input type="text" name="cust_name" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>New E-Mail:</b></td>
                    <td align="center"><input type="text" name="cust_email" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>New Contact No.:</b></td>
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
                    <td align="center" colspan="2"><input type="submit" class="btn-primary" name="reset" value="Update" />
                        <button class="btn-success" onclick="window.location='home.php';">Back</button>
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>
<?php

if (isset($_POST['reset'])) {
    $c_id = $_SESSION['cust_id'];
    $user_name = $_POST['cust_name'];
    $user_email = $_POST['cust_email'];
    $user_phone = $_POST['cust_phone'];
    $user_pass = $_POST['cust_confirm_pass'];

    $resetpass = "UPDATE customer SET cust_name='" . $user_name . "', cust_email='" . $user_email . "', cust_phone='" . $user_phone . "',cust_pass='" . $user_pass . "' WHERE cust_id=$c_id";

    $resetpassdb = mysqli_query($conn, $resetpass);


    if ($resetpassdb) {
        echo "<script>alert('Profile updated successfully!')</script> ";
        echo "<script>window.open('structProfile.php','_self')</script>";
    }
}
?>
