<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));

   $select = mysqli_query($con, "SELECT * FROM `users` WHERE name = '$name' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect Username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../mediaqueries.css">
   <link rel="stylesheet" href="index.css">
   <style>
      input{
         text-align: center;
      }
   </style>
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="login.php" method="post">
      <h2>Welcome Admin</h2>
      <input type="text" name="name" required placeholder=" username " class="box">
      <input type="password" name="password" required placeholder=" password " class="box">
      <input type="submit" name="submit" class="btn" value=" login ">
      
   </form>

</div>
   <footer>
        <div class="footercontainer">
           
            <div class="footerBottom">
                <p>Copyright &copy;2024 all Copyright reseived by <br><br> <span class="Designer">Dayrout OnLine </span></p>
            </div>
        </div>
    </footer>

</body>
</html>