<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managing Product System</title>
</head>
<body>
    <h2><b>Manage Products</b></h2>
    
    <?php  
    include('displayProducts.php');
    echo '<br><br>';
    echo '<h2><b>Insert New Products</b></h2>';          
    echo"<form method='POST' action='insertProduct.php' name='registerproduct'>
    <fieldset>
        <legend>Enter New Product Details</legend>
        <label>Product Name:</label><br>
        <input type='text' name='pname' value=''><br><br>
        <label>Price:</label><br>
        <input type='text' name='pprice' value=''><br><br>
        <label>Image File Name:</label><br>
        <input type='text' name='pimage' value=''><br><br>
        <input type='submit' name='psubmit' value='submit'>   <input type='reset' value='clear'>  
    </fieldset>
</form>";
?>
    <br>
    <br>
</body>
</html>