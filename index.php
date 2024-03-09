<?php

include 'config.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Dayrout OnLine </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/index.css">   
   <link rel="stylesheet" href="mediaqueries.css">
   <link rel="stylesheet" href="css/footer.css">
   <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon --> 
    <link class="icon" rel="shortcut icon" type="image/x-icon" href="./icon.png">

</head>
<body>
   <!-- Header Start -->
   <header>
        <div id="navbar">            
        </div>
        <div class="content">
            <h1>Welcome to <span class="primary-text"> Dayrout OnLine </span> Store</h1>
            <p>where convenience meeys quality.Exploare our wide range of products and enjoy a seamless shopping experience from the comfort of your home.</p>
            <a href="#products" class="btn btn-primary">Let's Go</a>
        </div>
    </header>
    <!-- Header End -->
   
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container">

   <div class="user-profile">
      <br>
      <h1 class="heading">أحدث المنتجات</h1>
   
   </div>

   <div id="products" class="products">

   

   <div class="box-container">

   <?php
   include('config.php');
   $result = mysqli_query($conn, "SELECT * FROM products");      
   while($row = mysqli_fetch_array($result)){
   ?>
      <form method="post" class="box" action="">
         <img src="admin/<?php echo $row['image']; ?>"  width="200">
         <div class="name"><?php echo $row['name']; ?></div>
         <div class="price"><?php echo $row['price']; ?>$</div>
         
         
      </form>
   <?php
      };
   ?>

   </div>

   </div>



</div>

<!-- footer section starts  -->
<footer>
        <div class="footercontainer">
            <div class="socialIcons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="footerBottom">
                <p>Copyright &copy;2024 all Copyright reseived by <br><br> <span class="Designer">Dayrout OnLine </span></p>
            </div>
        </div>
    </footer>
<!-- footer section ends -->

<script src="script.js"></script>
      
</body>
</html>