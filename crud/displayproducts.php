<?php
    // Make connection to database
    include('../connection/connection.php');
    //create a query to select all records from products table
    $query = "SELECT * FROM allproducts";
    //run query and store the result in a variable called $result
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    //display table with border and heading
    echo "<table border=2px ><tr><th>Product Name</th><th>Product Price</th><th>Product Images </th><th>Amend</th><th>Delete</th></tr>";
    //Use a while loop to iterate through your $result array and display 
    //ProductName, ProductPrice, ProductImageName.
    while ($rows = mysqli_fetch_array($result)) {
        //display output as assign variable
        echo "<tr><td><strong>" . $rows['productName'] . "</strong></td><td><strong>&pound" . $rows['price'] . "</strong></td><td>" . "<img src=./images/" . $rows['product_im'] . '>' . "</td><td>" .
            "<a href='amendProduct.php?id=" . $rows['product_id'] . "' class='btn btn-info btn-sm'>Amend</a>" . "</td><td>" .
            "<a href=deleteProduct.php?pid=" . $rows['product_id'] . ">Delete</a>" . "</td></tr>";
    }
    echo "</table>";
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display products</title>
    <link rel="stylesheet" href="styyle.css">
    <style>
        img {
            height: 200px;
            width: 200px;
        }
    </style>
</head>

<body>
</body>
</html>