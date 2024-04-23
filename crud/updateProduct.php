<?php
//Make connection to database
include('../connection/connection.php');
//Gather from $_POST[]all the data submitted and store in variables
if (isset($_POST['submit1'])) {
    $product_id = $_POST['id'];
    $productName = $_POST['pname1'];
    $price = $_POST['price1'];
    $product_im = $_POST['product_im1'];
    //Construct UPDATE query using variables holding data gathered
    $qry='UPDATE allproducts SET productName="$productName",price="$price",product_im="$product_im" WHERE product_id="$product_id"';
    //connecting conection with database
    $sql=mysqli_query($connection, $qry);
    //if sqlquery exist
    if ($sql) {
        //display output showing row update in url
        header('location:crud.php?msg=Product detail is updated successfully');
    } else {
        //else something wrong 
        echo " while updating data something went wrong";
    }
}
?>