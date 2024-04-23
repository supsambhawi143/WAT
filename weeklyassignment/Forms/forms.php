<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<h1>Processing Input from HTML Forms</h1>   

<!--FOR FIRST FORM-->
   <?php
        if(isset($_POST['loginSubmit'])){
            $email = $_POST['txtEmail'];
            $password = $_POST['txtPass'];   
            if(!empty($email))
            {
                echo "Email: ".$email." Password: ".$password."<br>";
            }
            else{
                echo "Email must not be empty";
           }    
       }
       else{
        echo "No data if found in the form.<br>";
       }
    ?>

<!--FOR SECOND FORM-->
    <?php
        if(isset($_POST['Comments'])){
          $email = $_POST['email'];
          $comments = $_POST['comment'];    
          if (isset($_POST['chkConfirm']))
          {
            $confirm='Agreed<br />';
          }
          else{
            $confirm='Not Agreed<br />';
          }
          if(!empty($email)){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
               echo "Email: ".$email."<br>";
               echo "Comments: ".$comments."<br>";
               echo "Confirm: ".$confirm;
            }
            else{
               echo "$email is not valid email<br>";
            } 
        }
        else{
            echo "Email must not be empty.<br>";
        }
        }
    ?>                  
 <!--HTML CODE FOR FIRST FROM-->
    <h2>Login Form using GET and POST</h2>
    <form method="POST" action="">
        <fieldset><legend>Login</legend>
            <label for="email">Email: </label>
            <input type="text" name="txtEmail" value = "<?php if(isset($_POST['txtEmail'])){echo $_POST['txtEmail'];}?>"/><br />
            <label for="passwd">Password: </label>
            <input type="password" name="txtPass" /><br/>
            <input type="submit" value="Submit" name="loginSubmit"/>
            <input type="reset" value="Clear"/>
        </fieldset>
    </form>

<!--HTML CODE OF SECOND FORM-->
    <h2>More Form Handling</h2>
    <form method = "POST" action = "">
        <fieldset>
            <legend>Comments</legend>
               <label>Email:</label>
               <input type= "text" name = "email" value = "<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"/><br/>

               <label>Comment</label><br/>
               <textarea rows = "4" cols="50" name = "comment"><?php if(isset($_POST['comment']))echo $comments;?></textarea><br/>

               <label>Click to Confirm</label>
               <input type = "checkbox" name = "chkConfirm"><br/>
               
               <input type = "submit" value = "Submit" name ="Comments"/>
               <input type= "reset" value = "Clear"/>
        </fieldset>
    </form>


    <!---Tax Calculator-->
    <h2>Tax Calculator</h2>
    <form Method ="POST" action= "">
        <fieldset>
            <legend>Without TAX calculator</legend>
            <label>After Tax Price:</label>
            <input type = "text" name= "afterTaxPrice"/>
            <label>Tax Rate:</label>
            <input type ="text" name= "rate"/>
            <input type= "submit" name = "Submit" value= "Submit"/>
            <input type= "reset" value = "Clear"/>
    </fieldset>
    </form>

     <!--PHP CODE FOR TAX CALCULATOR-->
    <?php
        if (isset($_POST['Submit'])) {
            $afterTaxPrice = $_POST['afterTaxPrice'];
            $rate = $_POST['rate'];
            $pattern =  '/^\d+(:?[.]\d{2})$/';

            if (((preg_match($pattern, $afterTaxPrice)) && (preg_match($pattern, $rate))) ||
                ((filter_var($afterTaxPrice, FILTER_VALIDATE_INT)) && (filter_var($rate, FILTER_VALIDATE_INT))) ||
                ((preg_match($pattern, $afterTaxPrice)) && (filter_var($rate, FILTER_VALIDATE_INT))) ||
                ((filter_var($afterTaxPrice, FILTER_VALIDATE_INT)) && (preg_match($pattern, $rate)))){

                $beforePrice = (100*$afterTaxPrice)/(100+$rate);
                $beforePrice = number_format($beforePrice, 2);
                echo "Price before tax = £".$beforePrice;
            }
            else {
                echo " After Tax Price or Tax Rate is not valid";
            }
        }
    ?>
</body>
</html>