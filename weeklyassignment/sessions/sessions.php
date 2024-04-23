<?php

//include init.php so session vars can be used
include "init.php";
//Use an if statement to determine whether the session var holding //the user name ($_SESSION['user'] has been set.  If it has, echo out //a welcome message for the user, followed by a links to a pages //called protected.php and logout.php.
 if(isset($_SESSION['username']))
{
     echo"<div class ='welcome'> <h1>Welcome!!</h1></div>";
     echo"<br/>";
     echo "<a href='protected.php' role='protected.php'>Protected</a>" ."<br/>";
     echo "<a href='logout.php' role='logout.php'>Logout</a>";
 }
 
//add an else section that will include loginform.php and display any //error message that is held in ($_SESSION['error']  
else{
    //include 'loginform.php';
    echo "error";
 }
	?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Hello</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>