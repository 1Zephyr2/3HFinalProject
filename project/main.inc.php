<?php

$host = 'localhost';
$db = 'cit17'; 
$user = 'root'; 
$password = ''; 

$conn = new mysqli($host, $user, $password, $db); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$service = $_POST["service"];
$date = $_POST["date"];
$time = $_POST["time"];

if (empty($name) || empty($email) || empty($service) || empty($date) || empty($time)) {
    echo "All fields are required."; 
    exit;
}

$stmt = $conn->prepare("INSERT INTO appointments (name, email, service, date, time) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $service, $date, $time);

if ($stmt->execute()) {
    header('Location: payment.php');
    exit;
} else {
    // Error booking appointment
    echo "Error: " . $stmt->error; 
    exit;
}

$stmt->close();
$conn->close();

?>