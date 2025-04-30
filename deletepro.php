<?php
include 'connection.php';

$id = $_GET['p_id'];

$delpro = "DELETE FROM products WHERE product_id = $id";

if (mysqli_query($conn, $delpro)) {
    mysqli_close($conn);
    header('Location: home.php');
    exit;
} else {
    echo "Error deleting record";
}

?>