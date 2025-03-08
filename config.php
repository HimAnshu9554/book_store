
<?php

$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "new project"; 
$port = 3307;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ✅ SMTP Email Configuration
$smtp_username = "himanshushukla2297@gmail.com"; // Gmail ID
$smtp_password = "omcx pxtv cyzs tvdm"; // Gmail App Password
$smtp_host = "smtp.gmail.com"; 
$smtp_port = 587; 

?>
