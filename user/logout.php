<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:login.php");
} else {
    //deleting all the session
    session_destroy();
    header("Location:login.php?msg = you have successfully logged out");
}
?>