<?php
//1.Connection to the database
include ('connection.php');


echo '<h2>Select ALL from the Customer Table</h2>';
$query1="SELECT * FROM customer ORDER BY CustomerID ASC";
$result1=mysqli_query($connection, $query1);
while ($row=mysqli_fetch_assoc($result1)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br/>';
}


echo "<h2>Select All from the Customer Table with Age>22</h2>";
$query2 = "SELECT * FROM customer WHERE Age>22";
$result2=mysqli_query($connection, $query2);
while ($row=mysqli_fetch_assoc($result2)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
}

echo "<h2>Select Females from the Customer Table with Age>=22</h2>";
$query3 = "SELECT * FROM customer WHERE Age>=22";
$result3=mysqli_query($connection, $query3);
while ($row=mysqli_fetch_assoc($result3)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
} 



echo "<h2>Select Males from the Customer Table with Age descending</h2>";
$query4 = "SELECT * FROM customer WHERE Gender = 'M' ORDER BY Age DESC";
$result4=mysqli_query($connection, $query4);
while ($row=mysqli_fetch_assoc($result4)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
}


echo"<h2>Select All from the Customer Table list with 'a' in the First name</h2>";
$query5="SELECT * FROM customer WHERE FirstName LIKE '%a%' ";
$result5=mysqli_query($connection, $query5);
while ($row=mysqli_fetch_assoc($result5)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
}
?>