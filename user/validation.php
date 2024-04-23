<?php
session_start();
//2.Connection to the database 
include('../connection/connection.php');
$error = array();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = htmlentities($_POST['password']);
    $email = trim($_POST['email']);

    if (isset($_POST['contact'])) {
        $contact = $_POST['contact'];
    }

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }

    if (isset($_POST['userage'])) {
        $age = $_POST['userage'];
    }
    if (isset($_POST['chkConfirm'])) {
        $checkbox = $_POST['chkConfirm'];
    }


    //validating name
    if (!empty($username)) {
        $pattern = '/^(?=.*[A-Z])(?=.*[a-z]).+$/';
        if (strlen($username) >= 6) {
            if (preg_match($pattern, $username)) {
                $username = $username;
            } else {
                $error['userErr'] = "Username must contaion least one Upper case and a lower case";
            }
        } else {
            $error['userErr'] = "Username must be at least 6 characters";
        }
    } else {
        $error['userErr'] = "Username is Must";
    }

    //2.validation of password
    if (!empty($password)) {
        $pattern2 = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/';
        if (preg_match($pattern2, $password)) {
            $password = md5($password);
        } else {
            $error['passErr'] = "Password must contain at least one uppercase,one sybmol and one digit";
        }
    } else {
        $error['passErr'] = "Password is required";
    }


    //3.email validation
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    } else {
        $error['emailErr'] = "You did not enter a email";
    }


    //4.validaion of contact number
    if (!empty($contact)) {
        //filtering number that allow '+','.' and '-'
        $filtered_phone_number = filter_var($contact, FILTER_SANITIZE_NUMBER_INT);

        //remove '-' from number
        $check_number = str_replace("-", "", $filtered_phone_number);

        //pattern to check
        $pattern4 = '/^[0-9]{10}+$/'; //validation along with country code
        $pattern5 = '/^[+][0-9]{13}+$/'; //vlidation along with country code

        if (preg_match($pattern4, $check_number) || preg_match($pattern5, $check_number)) {
            $contact = $check_number;
        } else {
            $error['contactErr'] = "Contact number is not valid";
        }
    }
    //5.validation of Gender
    if (!empty($gender)) {
        $gender = $gender;
    } else {
        $error['genderErr'] = "Gender must be specified";
    }


    //6. Validation of age
    if (!empty($age)) {
        $age = $age;
    } else {
        $error['ageErr'] = "Age must be selected";
    }

    //7. Validation of Terms and Condition
    if (!isset($checkbox)) {
        $error['checkboxErr'] = "Terms and condition must be checked";
    }

    //INSERT INTO TABLE
    //1.prepare sql query
    if (count($error) == 0) {
        $sql = "INSERT INTO users(username,password,email,contactnumber,gender,ageRange) VALUES
        ('$username','$password','$email','$contact','$gender','$age')";


        //2.Running query
        $query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if (!$query) {
            $message = "Failed to insert data in the table";
        } else {
            $message = "User Registered Successfully";
        }
        $_SESSION['message'] = $message;
    } else {
        $message = "* fields need to be filled.";
        $_SESSION['error'] = $error;
        $_SESSION['message'] = $message;
    }
    header('Location: signup.php');
}
?>