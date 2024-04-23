<?php
    session_start();//session start 
    if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
    }
    if(isset($_SESSION['message'])){
        $message = $_SESSION['message'];
    }
    unset($_SESSION['error']);
    unset($_SESSION['message']);
?>
  

  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Users</title>
    <link rel="stylesheet" href="styleee.css">
<body> 
<div class="header">
    <h1 style="font-size:180%;">HEALTHLY DERMA</h1></div>
    <form method="POST" name="registerForm" action="validation.php" enctype="multipart/form-data">
    <h1 style="font-size:180%; font-color:white;">REGISTER NOW!</h1></div>
        <fieldset>
          <legend><h3>Registeration Form</h3></legend>
          <?php
          if(isset($message)){
            echo "<span class=error>$message</span><br>"; }?>
            <br/>

            <label>Username</label><span class="error">*</span><br>
            <input type="text" name="username" value="<?php if (isset($_POST['username'])) {echo $_POST['username']; } ?>"/>
            <span class="error"><?php if(isset( $error['userErr']))echo $error['userErr'];?></span><br><br>

            <label>Password</label><span class="error">*</span><br>
            <input type="password" name="password"/>
            <span class="error"><?php if(isset( $error['passErr']))echo  $error['passErr'];?></span><br><br>

            <label>Email</label><span class="error">*</span><br>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) {echo $_POST['email']; } ?>"/>
            <span class="error"><?php if(isset($error['emailErr']))echo $error['emailErr'];?></span><br><br>

            <label>Contact Number</label><br>
            <input type = "text" name= "contact"/>
            <span class="error"><?php if(isset($error['contactErr']))echo $error['contactErr'];?></span><br><br>

            <label>Gender:</label>
            <input type ="radio" name="gender" value="M"/>Male
            <input type ="radio" name="gender" value="F"/>Female
            <span class="error">*<?php if(isset($error['genderErr']))echo $error['genderErr'];?></span><br><br>


            <label>Age Range:</label>
            <select name="userage" id="age"> 
                <option value="below 18">below 18</option>
                <option value="18-40">18-40</option>
                <option value="40-60">40-60</option>
                <option value="above 60">above 60</option>
            </select>
            <!--<span class="error">*<?php if(isset($error['ageErr']))echo $error['ageErr'];?></span>--><br><br>

            <label>I agree the terms and conditions: </label>
            <input type="checkbox" name="chkConfirm" id="checkbox">
            <span class="error">*<?php if(isset( $error['checkboxErr']))echo  $error['checkboxErr'];?></span><br><br>

            <input type="submit" name="submit" value="Register"/>
            <input type="reset" value="Clear">
            Already an Admin?<a href = "../search/login.php">Log in</a> 
        </fieldset>
    </form><br/><br/>    
</body>
</html>