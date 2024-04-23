<?php
//Make connection to database
include('connection.php');
//Gather data sent from amendProducts.php page
if(isset($_POST['esubmit']))
{
$newid=$_POST['id'];
$newname=$_POST['name'];
$newprice=$_POST['price'];
$newimage=$_POST['image'];
//Produce an update query to update product record for the id provided
$sql="UPDATE product SET productName='$newname', ProductPrice='$newprice',ProductImageName='$newimage' WHERE productID='$newid'";

//run query
$qry=mysqli_query($connection,$sql);
//Redirect to crud.php page
header( 'Location: crud.php?msg=Product Updated Successfully' ) ;
}
//Gather id sent from crud.php page
$eid = $_GET['id'];
//Produce query to select the product record for the id provided
$sql = "SELECT * FROM product WHERE productID=$eid";
//run query and store result
$qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
//extract row from result using mysqli_fetch_assoc()and store $row
while ($row = mysqli_fetch_assoc($qry))
{
    $eid=$row['productID'];
    $ename=$row['productName'];
    $eprice=$row['ProductPrice'];
    $eimage=$row['ProductImageName'];
}
mysqli_close($connection);
?>