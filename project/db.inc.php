<?php
$host = 'localhost';
$db = 'cit17'; 
$user = 'root'; 
$password = ''; 

$conn = new mysqli($host, $user, $password, $db); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>