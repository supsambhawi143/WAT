<?php
session_start(); //starting session
if (!isset($_SESSION['username'])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .header {
        padding: 60px;
        text-align: center;
        color: white;
        font-size: 30px;
        background-image: 
          url('https://images.pexels.com/photos/1502645/pexels-photo-1502645.jpeg?auto=compress&cs=tinysrgb&w=600');
      }

        div.gallery {
            margin: 17px;
            float: left;
            width: 460px;
            height: 480px;

        }

        div.desc {
            padding: 20px;
            text-align: center;
        }

        p {
            text-indent: 30px;
            text-align: justify;
        }
    </style>

</head>
<body>
    <div class="header">
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
        <h1 style="font-size:150%;">HEALTHLY DERMA <br /></h1>
    </div>
    <div class="gallery">
        <img src="https://images.pexels.com/photos/2586073/pexels-photo-2586073.jpeg?auto=compress&cs=tinysrgb&w=600"
            width="460px" height="460px">
        <div class="desc"><a href="sortsearch.php"> <strong>All Products</strong></a>
        </div>
    </div>
    <div class="gallery">
        <img src="https://images.pexels.com/photos/3018845/pexels-photo-3018845.jpeg?auto=compress&cs=tinysrgb&w=600"
            width="460px" height="460px">
        <div class="desc"><a href="../crud/amendProduct.php"> <strong>Manage products </strong></a>
        </div>
    </div>
    <div class="gallery">
        <img src="https://images.pexels.com/photos/1926620/pexels-photo-1926620.jpeg?auto=compress&cs=tinysrgb&w=600"
            width="460px" height="460px">
        <div class="desc"><a href="../crud/displayproducts.php"> <strong>Update products </strong></a>
        </div>
    </div>
</body>
</html>