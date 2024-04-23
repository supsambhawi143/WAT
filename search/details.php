<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <?php
    //Make connection to database
    include('../connection/connection.php');
    //Gather from $_POST[]all the data submitted and store in variables
    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        //Construct UPDATE query using variables holding data gathered
        $qry = "SELECT * FROM allproducts WHERE product_id='$product_id'";
        //connecting conection with database
        $sqlquery = mysqli_query($connection, $qry);
    
        //Use a while loop to iterate through your $result array and display 
        //ProductName, ProductPrice, ProductImageName.
        $rows = mysqli_fetch_array($sqlquery);
        //display output as assign veriable
        echo '<div class="header">';
        echo '<h1 style="font-size:180%;">HEALTHLY DERMA</h1>';
        echo '<p1>' . $rows['productName'] . '</p1>';
        echo '</div>';

        echo '<div class="gallery">' .
            "<h2 style='color:red ;text-align:center;font-size:180%; ' >" . "HELLO, GORGEOUS!" . "<h2>
        <h4 style='text-align:center;'>" . 'WELCOME TO HEALTHLY DERMA' . "</h4>" .
            "<p>" . "A brand of choice for the women of today! And we're here to ensure you have a lot of fun with our makeup.
        We're a brand that believes in empowerment. That's why, we carefully curate products from around the globe which
         meet every want and need there could possibly be when it comes to your makeup and skincare regime. We believe in 
         every interpretation of beauty. Bold to subdued, quirky to crazy, everyday to glam goddess! Our aim is to celebrate 
         every aspect of you, no matter what your style is.The “HEALTHLY DERMA” trademark is wholly owned and operated by 
         “Vellvette Lifestyle Private Limited”. Any products marketed or manufactured under the label “HEALTHLY DERMA” is the property 
         of the same Company and Parent brand Vellvette" . "</p>" .
            "<h4 style='text-align:center;'>" . 'So, go ahead and pick your faves.<br/> It\'s time to' . "</h4>" .
            "<h2 style='color:red ;text-align:center; font-size:180%;' >" . "Rule the world" . "!<h2>"
            . '</div>';
        echo '<div class="gallery">';
        echo '<div class="desc">' . "<h2 style='color:red ;text-align:center;font-size:180%; ' >" . "Product Details!" . "</h2>
    PRODUCT NAME:" . $rows['productName'] . "<br/><br/> PRODUCT PRICE: &pound" . $rows['price'] . "<br/><br/> PRODUCT DESCRIPTION: " . $rows['description'] . "<br/><br/> PRODUCT CATEGORY: " . $rows['category'];
        echo "<h4 style='text-align:center;'>" . 'So, go ahead and pick your faves.<br/> It\'s time to' . "</h4>" .
            "<h2 style='color:red ;text-align:center; font-size:180%;' >" . "Rule the world" . "!<h2>" . '</div>';
        echo '</div>';
        echo '<div class="gallery">';
        echo "<img src=../crud/images/" . $rows['product_im'] . " alt\"img\" width='460' height='480'>" . "<br/>" . '</div>';
    }
    ?>
</body>
</html>