<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="styyle.css">
</head>

<body>
    <div class="header">
        <h1 style="font-size:180%;">HEALTHLY DERMA</h1>
    </div>
    <?php
    //for displaying successful msg
    if (isset($_GET['msg'])) {
        echo "<h3>" . $_GET['msg'] . "</h3>"; //from taking data from url we use GET method                                                                                                                
    }
    ?>
    <div class="gallery">
        <img src="https://images.pexels.com/photos/1115128/pexels-photo-1115128.jpeg?auto=compress&cs=tinysrgb&w=600"
            width="400px" height="300px">
        <p>The ultimate everyday palette! Own your power with this luxurious line-up of buttery-smooth golds, coppers,
            browns.</p>
            Add a new admin?<a href="../register/register.php">Add now</a>

    </div>
    <div class="gallery">
        <form method="POST" action="insertProduct.php">
            <fieldset>
                <legend>Enter New Product Details</legend><br /><br />
                <label>Product Name:</label><br />
                <input type="text" name="pname"><br />
                <label>Product Description:</label><br />
                <input type="text" name="des"><br />
                <label>Product Category:</label><br />
                <input type="text" name="category"><br />
                <label>Product Type:</label><br />
                <input type="text" name="Type"><br />
                <label>Price</label><br>
                <input type="text" name="price"><br />
                <label>Image Filename</label><br />
                <input type="text" name="product_im" id="fileToUpload">
                <div class="btn">
                    <input type="submit" name="productRegister" value="Submit">
                    <input type="reset" name="Clear" value="Clear"><br /><br /><br /><br />
             
            </fieldset>
        </form>
    </div>
    <div class="gallery">
        <img src="https://images.pexels.com/photos/4041392/pexels-photo-4041392.jpeg?auto=compress&cs=tinysrgb&w=400">
        <p>A universal serum for blemish-prone skin that smooths, brightens, and supports. Visible Shine, Signs of
            Congestion, Textural Irregularities, Dullness, Dryness.One-Stop Solution Repairing Anti-Aging True Glow
            Face Care Tea Tree Oil Private Label Skin Facial Serum For All Skin Types</p>
    </div>
</body>

</html>