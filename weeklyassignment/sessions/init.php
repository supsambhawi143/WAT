<?php 
session_start();
//Set up the database access credentials
define('HOSTNAME', 'localhost');
define('USERNAME', 'sham_sham8000');
define('PASSWORD', ')$Q0Y0*eQRW1');
define('DATABASE', 'sham8000_wat2024');
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("Unable to connect to the database");
?>