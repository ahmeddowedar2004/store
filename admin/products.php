<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon --> 
    <link class="icon" rel="shortcut icon" type="image/x-icon" href="./icon.png">

    <title> Admin | Products </title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 60%;
        }
        button{
            border:none;
            padding: 10px;
            width: auto;
            font-weight: bold;
            font-size: 15px;
            background-color: black;
            cursor: pointer;
            font-family: 'Cairo', sans-serif;
            margin-bottom: 10px;
            color: white;
        }
    </style>
</head>
<body>
    <center>
    
        <h3>  Products Panal </h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>Product name: $row[name]</h5>
                    <h5 class='card-text'>Price: $row[price]</h5>
                    <a href='update.php? id=$row[id]' class='btn btn-primary'> edit product </a>
                    <a href='delete.php? id=$row[id]' class='btn btn-danger'> delete product </a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
     
     <!-- footer section starts  -->
    <footer>
        <div class="footercontainer">
        <a href="index.php"><button><i class="fas fa-arrow-circle-left"></i></button></a>
            <div class="footerBottom">
               
            </div>
        </div>
    </footer>
<!-- footer section ends -->
</body>
</html>