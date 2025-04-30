 <?php
 include 'connection.php';

    $c_id = $_GET['cust_id'];
    $statEn = "Enable";
    $updatestat = "UPDATE customer SET flag='" . $statEn . "' WHERE cust_id=$c_id";
   if (mysqli_query($conn, $updatestat)){
    mysqli_close($conn);
    header('Location: StructMCust.php');
    exit;
} else {
    echo "Please Try Again";
}

?>


