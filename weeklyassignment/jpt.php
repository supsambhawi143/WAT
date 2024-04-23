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