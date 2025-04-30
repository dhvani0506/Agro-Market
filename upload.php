<?php

require_once 'connection.php';

if(isset($_POST["submit"])){
    $productname = $_POST["productname"];
    $price = $_POST["price"];
    $note = $_POST["note"];
    $upload_dir = "uploads/";
    $product_image = $upload_dir.$_FILES["imageupload"]["name"];
    $upload_dir.$_FILES["imageupload"]["name"];
    $upload_file = $upload_dir.basename($_FILES["imageupload"]["name"]);
    $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));
    $check = $_FILES["imageupload"]["size"];
    $upload_ok =0;

    if(file_exists($upload_file)){
        echo "<script>alert('already uploaded')</script>";
        $upload_ok = 0 ;
    }else{
        $upload_ok =1;
        if($check !== false){
            $upload_ok = 1;
            if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
                $upload_ok = 1;
            }else{
                echo "<script>alert('change image type')</script>";
            }
        }else{
            echo "<script>alert('photo size is 0')</script>";
            $upload_ok = 0;
        }
    }

    if($upload_ok == 0){
        echo "<script>alert('soory dosent upload')</script>";
    }else{
        if($productname != "" && $price !=""){
            move_uploaded_file($_FILES["imageupload"]["tmp_name"],$upload_file);

            $sql = "INSERT INTO product(productname,price,note,productimage)VALUES('$productname','$price','$note','$product_image')";

            if($conn->query($sql)=== true){
                echo "<script>alert('product succesfully added')</script>"; 
            }
        }
    }
}

?>

<?php

// session_start();

// if(!isset($_SESSION['admin_name'])){
//     "<script>alert('You are Loggedout')</script>";
//     header('location:login.php');
// }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="upload1.css">
    
</head>
<body>
    <?php
        include_once 'adminheader.php';  
    ?>





<h1 class="heading">.</h1>




    <div class="heading1">
        <h1 class="heading">Upload<span>Product</span></h1>
    </div>
    <section id="upload-container">
    
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="productname" id="productname" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="text" name="note" id="note" placeholder="note" required>
            <input type="file" name="imageupload" id="imageupload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" class=".btn"  name="submit">
        </form>
    </section>

    <?php
        include_once 'adminfooter.php';  
    ?>


    <script>
        var productname = document.getElementById("productname");
        var price = document.getElementById("price");
        var choose = document.getElementById("choose");
        var uploadimage = document.getElementById("imageupload");

        function upload(){
            uploadimage.click();
        }

        uploadimage.addEventListener("change",function(){
            var file = this.files[0];
            if(productname.value == ""){
                productname.value = file.name;

            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</body>
</html>