<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin | Add Products </title>
    <link rel="stylesheet" href="index.css">
   
    <link rel="stylesheet" href="../mediaqueries.css">
   
</head>
<body>
    <header>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
        <div class="desktop-nav">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2> welcome Admin </h2>
                
                <input type="text" name='name' placeholder="product name">
                <br>
                <input type="text" name='price' placeholder="product price">
                <br>
                <input type="file" id="file" name='image' style='display:none;'><br>
                <label class='btn btn-primary' for="file"> select img </label><br><br>
                <button name='upload'>UpLoad</button>
                <br><br>
                
            </form>
        </div>
       
    </center>
    </header>
    <!-- footer section starts  -->
<footer>
        <div class="footercontainer">
            <div class="footerBottom">
                
                <a href="products.php"> View All Products </a>
                <p>Copyright &copy;2024 all Copyright reseived by <br><br> <span class="Designer">Dayrout OnLine </span></p>
            </div>
        </div>
    </footer>
<!-- footer section ends -->
</body>
</html>