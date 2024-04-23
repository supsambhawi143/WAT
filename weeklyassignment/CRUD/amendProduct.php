<?php
include('updateProduct.php');
echo "<form method='POST' action='' name='editproduct'>";
echo " <fieldset>";
echo "<legend>Enter Product Details</legend>";
echo " <label>Product ID:</label>";
echo "<input type='text' name='id' value='$eid' readonly='readonly'><br><br>";
echo " <label>Product Name:</label>";
echo "<input type='text' name='name' value='$ename'><br><br>";
echo "<label>Price:</label>";
echo "<input type='text' name='price' value='$eprice'><br><br>";
echo " <label>Image File Name:</label>";
echo " <input type='text' name='image' value='$eimage'><br><br>";
echo "<input type='submit' name='esubmit' value='submit'>   <input type='reset' value='clear'>";
echo "</fieldset>";
echo "</form>";
?>