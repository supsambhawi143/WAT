<?php
//include init.php
 include "init.php";
 if(!empty($_POST['txtUser']) && !empty($_POST['txtPass']) )
 {
//Gather details submitted from the $_POST array and store in local vars
$username = $_POST['txtUser'];
$password = $_POST['txtPass'];

//build query to SELECT records from the users table WHERE
//the username AND password in the table are equal to those entered.

$query = "SELECT * FROM allusers WHERE username = '$username' && password = '$password'";
//run query and store result
$result = mysqli_query($connection, $query);
//check result and generate message with code below
if ($row = mysqli_fetch_assoc($result)) {
   $_SESSION['username']=$username;
   header ('location:sessions.php');
} else {
   $_SESSION['error']= 'User not recognised';
   header ('location:sessions.php');
}
 }
 else
 {
	 echo "Login Failed";
 }
?>