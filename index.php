<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='login.js'></script>
    <link rel="stylesheet" href="login.css" media="all" />
    <title>Admin Login</title>
</head>

<body>

    <div class="container-fluid" style="background-color: white;">
        <h1 id=h1 style="text-align:center; "><u>ADMIN'S CORNER</u></h1>
        <hr>
    </div>

    <div class="container" style="background-color: white;">

        <h3 id=h3 style="text-align:center;"><u>Admin Login</u></h3>

        <form id="log" action="#" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Admin Email:</b>&nbsp;<input type="text" name="Admin_email" placeholder="Name" required>
            <br>
            <b>Admin Password:</b>&nbsp;<input type="password" name="pass" placeholder="Password" required>
            <br>
            <br>
            <input class="btn-primary" type="submit" id="login" name="login" value="Login">
        </form>


        <h5 style="font-size: 20px; float:right;"><u>Don't have an account?<a href="admin_register.php">Create Here</a></u></h5>
        <br>

    </div>
    <div class="img">
        <img src="logo-removebg-preview.png" alt="" id="l1">
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['login'])) {

    $name = $_POST['Admin_email'];
    $pass = $_POST['pass'];


    $adlog = "SELECT * FROM admin_db WHERE Admin_email = '$name' AND Admin_Pass = '$pass' ";

    $adresult = mysqli_query($conn, $adlog);

    if (mysqli_num_rows($adresult) === 1) {
        $row = mysqli_fetch_assoc($adresult);
        if ($row['Admin_email'] === $name && $row['Admin_Pass'] === $pass) {
            $_SESSION['Admin_email'] = $row['Admin_email'];
            $_SESSION['Admin_ID'] = $row['Admin_ID'];
            header("Location: home.php");
            exit();
        }
    } else {
        header("Location: index.php?error=Incorect Admin Email or Password");
        exit();
    }
}
?>