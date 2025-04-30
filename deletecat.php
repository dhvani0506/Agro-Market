<?php
include 'connection.php';

$id = $_GET['cat_id'];

$delcat = "DELETE FROM categories WHERE cat_id = $id";

if (mysqli_query($conn, $delcat)) {
    mysqli_close($conn);
    header('Location: StructMCats.php');
    exit;
} else {
    echo "Error deleting record";
}

?>