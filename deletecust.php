<?php
include 'connection.php';

$cust_id = $_GET['cust_id'];

$delpro = "DELETE FROM customer WHERE cust_id = $cust_id";

if (mysqli_query($conn, $delpro)) {
    mysqli_close($conn);
    header('Location: StructMCust.php');
    exit;
} else {
    echo "Error deleting record";
}

?>