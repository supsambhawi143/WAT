<?php
if (isset($_POST['productRegister'])) {
    $productName = $_POST['pname'];
    $description = $_POST['des'];
    $category = $_POST['category'];
    $Type = $_POST['Type'];
    $price = $_POST['price'];
    $product_im = $_POST['product_im'];

    //1.//connection to database
    include('../connection/connection.php');

    //2.sql query
    $sql = "INSERT INTO allproducts(productName,description,category,Type,price,product_im) VALUES('$productName','$description','$category','$Type',$price,'$product_im')";

    //3.mysqli_query()
    $query = mysqli_query($connection, $sql);
    if ($query) {
        header("Location:crud.php?msg=New Product is inserted successfully");
    } else {
        echo "Please specify data of New Product";
    }
}
?>