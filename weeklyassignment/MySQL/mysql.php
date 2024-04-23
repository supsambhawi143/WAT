<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql</title>
</head>
<body>
    <form method = "POST" action="insertRecord.php">
        <fieldset>
            <legend>Enter Customer Details</legend>
            <label>First Name:</label>
            <input type = "text" name="fname"/><br><br>
            <label>Surname:</label>
            <input type="text" name="surname"/><br><br>
            <label>Email:</label>
            <input type= "email" name = "email"/><br><br>
            <label>Password:</label>
            <input type = "password" name= "password"/><br><br>
            <label>Gender:<label>
                <select name = "gender" id="gender">
                    <option value= "M" selected>Male</option>
                    <option value = "F">Female</option>
                </select><br><br>   
            <label>Age:</label>
            <input type = "text" name="age"/><br><br>
            <input type = "submit" name= "Submit"/>
        </fieldset>
    </form>
    <?php
    include('selectRecord.php');
    ?>
    
</body>
</html>