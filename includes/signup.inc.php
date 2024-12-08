<?php

// Database connection details 
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "cit17database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST["fullName"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];

// Basic validation
if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {
  echo "All fields are required.";
}
if ($password !== $confirmPassword) {
  echo "Passwords do not match.";
}
if (!empty($errors)) {
    session_start();
    $_SESSION['errors'] = $errors;
    header("Location: Login/create-account.php");
    exit; 
  }

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert data
$stmt = $conn->prepare("INSERT INTO users (full_name, email, password, role) VALUES (?, ?, ?, 'customer')"); 
$stmt->bind_param("sss", $fullName, $email, $hashedPassword);

if ($stmt->execute()) {
  header("Location: Mainpage/index.php");
  exit;
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>