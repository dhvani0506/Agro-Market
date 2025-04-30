<?php
include 'connection.php';

$id = $_GET['id'];

$delmybid = "DELETE FROM bids WHERE bid_id = $id";

if (mysqli_query($conn, $delmybid)) {
    mysqli_close($conn);
    header('Location: structBids.php');
    exit;
} else {
    echo "Error deleting record";
}

?>