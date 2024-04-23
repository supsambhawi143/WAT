<?php
//Make connection to database
include('connection.php');
//create a query to select all records from products table
$sql = "SELECT * FROM product";
//run query and store the result in a variable called $result
$result = mysqli_query($connection, $sql);
//Use a while loop to iterate through your $result array and display
//ProductName, ProductPrice, ProductImageName.
echo "<table border='1'>";
echo "<thead>
<tr>
<th>Product Name</th><th>Product Price</th><th>Product Image</th><th>Amend</th><th>Delete</th></tr></thead>";
echo "<tbody>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
    <td> " . $row['productName'] . "</td>
    <td>" . $row['ProductPrice'] . "</td>
    <td><img src='./images/" . $row['ProductImageName'] . "'></td>
    <td><a href=amendProduct.php?id=" . $row['productID'] . ">Amend</a></td>
    <td><a href=deleteProduct.php?id=" . $row['productID'] . ">Delete</a></td>
    </tr>
    ";
}
echo "</tbody></table>";
mysqli_close($connection);
?>