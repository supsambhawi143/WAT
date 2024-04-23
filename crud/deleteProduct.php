<?php
//Make connection to database
include('../connection/connection.php');
//Gather from $_GET[]all the data submitted and store in variables i.e. pid
$id = $_GET['pid'];
//Construct DELETE query using variables holding data gathered i.e sql
$sql = "DELETE FROM allproducts WHERE product_id=$id";
//run query and store the result in a variable called $connect
$connect = mysqli_query($connection, $sql) or die(mysqli_error($connection));
//if connect then
if ($connect) {
	//header located to displayproducts
	header('Location:crud.php');
	echo "Product is deleted succesfully";
} else {
	//else display something wrong
	echo "something wrong...please check try again";
}
?>