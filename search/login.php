<?php
    if(isset($_POST['login'])){
       //getting data from form
        $username = $_POST['uname'];
        $password = $_POST['upass'];
        $pwd = $_POST['upass'];
        //$rememberMe = $_POST['rememberMe'];
        if(isset($_POST['rememberMe'])){
          setcookie('usr',$username,time()+60*60*24*7,"/");    //cookie for username
        }
     //1. sql statement
     $sql = "SELECT * FROM register WHERE username= '$username' AND password =md5('$password')";
     //2.include connection.php
     include('../connection/connection.php');
      $qry = mysqli_query($connection, $sql) or die(mysqli_error($connection));
      $count = mysqli_num_rows($qry);
      if($count==1){
        session_start(); //starting session
        $_SESSION['username'] = $username; 
        header("location:dashboard.php");
      }
      else{
        echo "Credential error";         
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
      .header {
        padding: 60px;
        text-align: center;
        color: white;
        font-size: 30px;
        background-image: 
          url('https://images.pexels.com/photos/1502645/pexels-photo-1502645.jpeg?auto=compress&cs=tinysrgb&w=600');
      }

      body{
        background-color: rgb(253, 252, 252);  
      }
      div.gallary{
        font-size: 20px;
        text-align:center;
        float: left;
        width:600px;
        margin:50px;
        height:300px;
        padding-bottom:100px;
        background-image: 
      linear-gradient(to right bottom, 
        rgb(194, 183, 162),
        rgba(108, 95, 80, 0.8)),
        url('https://images.pexels.com/photos/8740311/pexels-photo-8740311.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
      }
    </style>

</head>
<body>
<div class="header">
    <h1 style="font-size:180%;">HEALTHLY DERMA</h1></div>
    <div class="gallary">
        <img src="https://images.pexels.com/photos/2547541/pexels-photo-2547541.jpeg?auto=compress&cs=tinysrgb&w=600" width="600px" height="400px" >
      </div>

    <div class="gallary">
    <form method = "POST" action="" name ="login" enctype= "multipart/form-data"class="login-form" > 
    <h1 style='color:white ;text-align:center;font-size:180%;'>HELLO, GORGEOUS!</h1>  
      <fieldset><legend>Login </legend><br>
        <label>Username</label><br>
        <input type= "text" name='uname' value = "<?php if(isset($_COOKIE['usr'])) echo $_COOKIE['usr'];?>"/><br><br>
        <label>Password</label><br>
        <input type= 'password' name='upass' value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>"/><br>
        <label>Remember me</label>
        <input type ='checkbox' name ="rememberMe" value='1'/><br/><br/>
        <input type = 'submit' name='login' value='login'/><br/><br/><br/>
      </fieldset>
     </form>
  </div> 
  </body>
</html>