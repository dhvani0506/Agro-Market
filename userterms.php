<?php

require_once 'connection.php';

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="terms.css">
    
</head>
<body>
    <?php
        include_once 'header.php';  
    ?>





<h1 class="heading">.</h1>




    <div class="heading1">
        <h1 class="heading">Bidding<span>Terms</span></h1>
    </div>

    <section id="upload-container">
    
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id recusandae voluptatum, cum sint laboriosam aspernatur omnis nulla quisquam quasi labore sunt corporis magni debitis ipsum fugit impedit ullam rerum sapiente maxime saepe asperiores cumque modi. Modi esse maiores, placeat nemo assumenda cupiditate cumque, odit ipsa eligendi molestiae, sunt labore? Minus sint ea maxime ad ipsa veritatis nam quidem doloremque sunt, nisi magni aut odit rem voluptatem doloribus hic?</h3>

        <br>
        <br>
        <br>
<form>
        <input type="checkbox" name="yousendit" id="yousendit" value="1" onclick="return yousendit();"/>
        
        <label for="terms">Terms And condition</label>
</form>
<br>
<br>

<div class="checkout-btn" style="padding-left: 15rem;">
      <a href="" class="btn" onclick="return yousendit()">procced </a>
   </div>
    </section>

    <?php
        include_once 'footer.php';  
    ?>


    <script>
    

function yousendit(){
    if(document.getElementById('yousendit').checked){
        window.location='Auction/Bidder/index.php';
        return false;
    }
    else{
        alert("Plese Confirm Terms!!");
    }
    return true;

}
</script>
    
</body>
</html>