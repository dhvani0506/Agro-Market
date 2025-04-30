<?php
include 'connection.php';

$id = $_GET['id'];

$delbidhist = "DELETE FROM bids WHERE bid_id = $id";

if (mysqli_query($conn, $delbidhist)) {
    mysqli_close($conn);
  header('Location: home.php');
    exit;
} else {
    echo "Error deleting record";
}

?>