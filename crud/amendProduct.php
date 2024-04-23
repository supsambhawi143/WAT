 <?php
include('../connection/connection.php');
if (isset($_GET['id'])) {
    $id1 = $_GET['id'];
    $query = "SELECT * FROM allproducts WHERE product_id='$id1'";
    $qry = mysqli_query($connection, $query);
    $product = mysqli_fetch_array($qry);
} else {
    header('Location:crud.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amend Products</title>
    <link rel="stylesheet" href="styyle.css">

</head>

<body>
    <div class="header">
        <h1 style="font-size:180%;">HEALTHLY DERMA</h1>
    </div>
    <div class="gallery">
        <img src="https://images.pexels.com/photos/1499512/pexels-photo-1499512.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            width="400px" height="300px">
        <p>The ultimate everyday palette! Own your power with this luxurious line-up of buttery-smooth golds, coppers,
            browns, and neutrals in a variety of textures including intensely pigmented mattes, creamy gel-liner
            hybrids, foiled chrome metallics, AND a blingy wet-look shimmer.</p>
    </div>
    <div class="gallery">
        <form method="POST" action="updateProduct.php">
            <fieldset>
                <h4 style='color:red ;text-align:center;font-size:180%;'>EDIT DETAILS HERE!</h4>
                <legend>Enter New Product Details</legend><br /><br />
                <input type="hidden" name="id" value="<?php echo $product['product_id']; ?>">
                <label>Product Name:</label><br>
                <input type="text" name="pname1" value="<?php echo $product['productName']; ?>"><br /><br />
                <label>Price</label><br>
                <input type="text" name="price1" value="<?php echo $product['price']; ?>"><br /><br />
                <label>Image Filename</label><br>
                <input type="text" name="product_im1" id="<?php echo $product['product_im']; ?>"><br /><br />
                <div class="btn">
                    <input type="Submit" name="submit1" value="update">
                </div>
            </fieldset>
        </form>
    </div>
    <div class="gallery">
        <p>The ultimate everyday palette! Own your power with this luxurious line-up of buttery-smooth golds, coppers,
            browns, and neutrals in a variety of textures including intensely pigmented mattes, creamy gel-liner
            hybrids, foiled chrome metallics, AND a blingy wet-look shimmer.</p>
        <img src="https://images.pexels.com/photos/912950/pexels-photo-912950.jpeg" width="400px" height="300px">
    </div>
</body>
</html>