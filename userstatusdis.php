<?php
 include 'connection.php';


    $c_id = $_GET['cust_id'];
    $statDis = "Disable";
    $updatestatdis = "UPDATE customer SET flag='" . $statDis . "' WHERE cust_id=$c_id";
    if (mysqli_query($conn, $updatestatdis)){
        mysqli_close($conn);
        header('Location: StructMCust.php');
        exit;
    } else {
        echo "Please Try Again";
    }
    
 ?>