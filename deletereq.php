<?php
include 'connection.php';

$id = $_GET['id'];

$delpro = "DELETE FROM requests WHERE id = $id";

if (mysqli_query($conn, $delpro)) {
    mysqli_close($conn);
    header('Location: StructMReq.php');
    exit;
} else {
    echo "Error deleting record";
}

?>