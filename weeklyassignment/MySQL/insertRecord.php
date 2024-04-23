<?php
   //1.Connection to database
   include 'connection.php';

   if(isset($_POST['Submit'])){
       
       $first_name = $_POST['fname'];
       $surname = $_POST['surname'];
       $email= $_POST['email'];
       $password = $_POST['password'];
       $gender= $_POST['gender'];
       $age = $_POST['age'];

       //2.sql query
       $query = "INSERT INTO customer(FirstName,LastName,Email,Password,Gender,Age) 
       VALUES('$first_name','$surname','$email','$password','$gender','$age')";

    //3.mysqli_query
    $qry = mysqli_query($connection,$query) or die (mysqli_error($connect));
    if($query){
         header ("location:mysql.php");
        echo "Record inserted successfully.";
       
    }else{
        echo "ERROR: Could not able to execute :". mysqli_error($connect);
    }
   
   }
?>