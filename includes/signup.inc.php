<?php
session_start();

// Database connection
include('db.inc.php');

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
$errors = array(); 

if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {
    $errors[] = "All fields are required."; 
}

if ($password !== $confirmPassword) {
    $errors[] = "Passwords do not match.";
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors; 
    header("Location: create-account.php"); 
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
    // Handle database error
    $errors[] = "Error: " . $stmt->error; 
    $_SESSION['errors'] = $errors;
    header("Location: create-account.php"); 
    exit;
}

$stmt->close();
$conn->close();

?>