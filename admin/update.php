<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin | Update Products </title>
    <link rel="stylesheet" href="index.css">
    <!-- Favicon --> 
    <link class="icon" rel="shortcut icon" type="image/x-icon" href="./icon.png">

</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from products where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <header>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
        <div class="desktop-nav">
            <form action="up.php" method="post" enctype="multipart/form-data">
                
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'><br>
                <label for="file"> Edit img </label><br><br><br>
                <button name='update' type='submit'> Edit</button>
                <br><br>
                <br>
              
            </form>
        </div>
    </center>
    </header>
    <!-- footer section starts  -->
`   <footer>
        <div class="footercontainer">
            
            <div class="footerBottom">
                <a href="index.php"> Home </a> <br>
                <a href="products.php"> View All Products </a>
                <p>Copyright &copy;2024 all Copyright reseived by <br><br> <span class="Designer">Dayrout OnLine </span></p>
            </div>
        </div>
    </footer>
<!-- footer section ends -->
</body>
</html>