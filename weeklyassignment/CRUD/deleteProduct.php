<?php
//Make connection to database
include('connection.php');
//Gather id from $_GET[]
if (isset($_GET['id'])) {
    $delid = trim($_GET['id']);
    //Construct DELETE query to remove record where WHERE id provided equals
    $sql = "DELETE FROM product WHERE productID = $delid";
    //run $query
    $query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    // check to see if any rows were affected
    if (mysqli_affected_rows($connection) > 0) {
        //If yes , return to calling page(stored in the server variables)
        header("Location: crud.php?msg=Product Entry Deleted Successfully");
    } else {
        // print error message
        echo "Error in query: $query. " . mysqli_error($connection);
        exit;
    }
} ?>