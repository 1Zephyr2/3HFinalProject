<?php
session_start();

// Database connection details 
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "cit17database"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get form data
$email = $_POST["username"]; 
$password = $_POST["password"];

// Basic validation
if (empty($email) || empty($password)) {
  $_SESSION['errors'] = array("Email and password are required.");
  header("Location: Login/index.php");
  exit;
}

// SQL query to fetch user data
$stmt = $conn->prepare("SELECT user_id, password, role FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
  $stmt->bind_result($user_id, $hashedPassword, $role);
  $stmt->fetch();

  // Verify password
  if (password_verify($password, $hashedPassword)) {
    $_SESSION['user_id'] = $user_id; 

  } else {
    $_SESSION['errors'] = array("Incorrect password.");
  }
} else {
  $_SESSION['errors'] = array("Email not found.");
}

$stmt->close();
$conn->close();

header("Location: Mainpage/index.php");
exit;

?>