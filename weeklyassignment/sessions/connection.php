<?php 
session_start();
//Set up the database access credentials
define('HOSTNAME', 'localhost:4306');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'sham');
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("Unable to connect to the database");
?>