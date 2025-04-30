<div class="content_area" style="overflow:scroll">

<script>
        var check = function() {
            if (document.getElementById('admin_pass').value ===
                document.getElementById('admin_confirm_pass').value && document.getElementById('admin_pass').value.length != 0) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password Matching';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password Not Matching';
            }
        }
    </script>

<div class="container">
        <h3 id=h3 style="text-align:center;"><u>Change Admin Name and Password</u></h3>
        <form id="regis" action="" method="POST">
            <table align="center" style="margin-top: 25px; margin-left:250px" width="400px" height="300px">
                <tr>
                    <td align="center"><b>New Name:</b></td>
                    <td align="center"><input type="text" name="admin_name" required /></td>
                </tr>
                <tr>
                    <td align="center"><b>New Password:</b></td>
                    <td align="center"><input type="password" name="admin_pass" id="admin_pass" required onkeyup="check();" /></td>
                </tr>
                <tr>
                    <td align="center"><b>Confirm New Password:</b></td>
                    <td align="center"><input type="password" name="admin_confirm_pass" id="admin_confirm_pass" required onkeyup="check();" /><br><span id='message'></span></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" class="btn-primary" name="reset" value="Confirm and Reset" />
                    <button class="btn-success" onclick="window.location='home.php';">Back</button></td>
                </tr>

            </table>
        </form>
    </div>
    </div>

    <?php

if (isset($_POST['reset'])) {
    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_confirm_pass'];

            $resetpass = "UPDATE admin_db SET Admin_Name='" . $admin_name . "', Admin_Pass='" . $admin_pass . "'";

            $resetpassdb = mysqli_query($conn, $resetpass);

            if ($resetpassdb) {
                echo "<script>alert('Password changed successfully!')</script> ";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    
?>