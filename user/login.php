<?php
  if (isset($_POST['login'])) {
    //getting data from form
    $username = $_POST['uname'];
    $password = $_POST['upass'];
    $pwd = $_POST['upass'];
   // $rememberMe = $_POST['rememberMe'];
    if (isset($_POST['rememberMe'])) {
      setcookie('usr', $username, time() + 60 * 60 * 24 * 7, "/"); //cookie for username
    }
    //1. sql statement
    $sql = "SELECT * FROM users WHERE username= '$username' AND password =md5('$password')";

    //2.include connection.php
    include('../connection/connection.php');
    $qry = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $count = mysqli_num_rows($qry);
    if ($count == 1) {
      session_start(); //starting session
      $_SESSION['username'] = $username; //session
      header("Location:../search/sortsearch.php");
    } else {
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
  <link rel="stylesheet" href="styll.css">
  <title>Login Page</title>
</head>

<body>
  <div class="header">
    <h1 style="font-size:180%;">HEALTHLY DERMA</h1>
  </div>
  <div class="gallary">
    <img src="https://images.pexels.com/photos/2547541/pexels-photo-2547541.jpeg?auto=compress&cs=tinysrgb&w=600">

  </div>
  <div class="gallary">
    <form method="POST" action="" name="login" enctype="multipart/form-data" class="login-form">
      <fieldset>
        <legend>Login </legend><br /><br />
        <label>Username</label><br />
        <input type="text" name='uname' value="<?php if (isset($_COOKIE['usr']))
        echo $_COOKIE['usr']; ?>" /><br /><br />
        <label>Password</label><br />
        <input type='password' name='upass'
          value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>" /><br /><br />
        <label>Remember me</label>
        <input type='checkbox' name="rememberme" value='1' /> <br />
        <input type='submit' name='login' value='login' /><br /><br /> <br /><br /><br />
        Don't have a account ? <a href="signup.php"> Sign Up</a> &nbsp |
        Are you an Admin ?<a href="../search/login.php"> Login Here</a>

      </fieldset>
    </form>
  </div>
</body>

</html>