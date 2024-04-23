<?php
//Make connection to database
include('connection.php');                              
//Gather from $_POST[]all the data submitted and store in variables
if(isset($_POST['psubmit'])){

    $pname = $_POST['pname'];
    $price=$_POST['pprice'];
    $filename = $_POST['pimage'];
    if(empty($pname)||empty($filename)||empty($price)){
        header('Location: crud.php?msg=Error!!! Fill in all the details for insertion');

    }
    else{
    //Construct INSERT query using variables holding data gathered
    $sql = "INSERT INTO product(productName,ProductPrice,ProductImageName) VALUES('$pname','$price','$filename')";
    //run $query
    $query=mysqli_query($connection,$sql) or die(mysqli_error($connection));
    //return to calling page(stored in the server variables)    
    if($query){

        header('Location: crud.php?msg=Product Inserted Successfully');
    }
else{
    header('Location:crud.php');
}

    }
}
else{
    header('Location:crud.php');

}
mysqli_close($connection);
?>