<?php
session_start();

// Database connection
include('db.inc.php');

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
$query = "INSERT INTO users (fullName, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query); 
$stmt->bind_param("sss", $fullName, $email, $hashedPassword);
$stmt->execute();

if ($stmt->execute()) {
    header("Location: login.php"); 
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