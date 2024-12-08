<?php
session_start();

// Database connection details 
$host = 'localhost';
$db = 'capstonedatabase'; 
$user = 'root'; 
$password = ''; 

$conn = new mysqli($host, $user, $password, $db); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST["username"]; 
$password = $_POST["password"];

// Basic validation
if (empty($email) || empty($password)) {
    $_SESSION['errors'] = array("Email and password are required.");
    header("Location: login.php");
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
       
        $_SESSION['role'] = $role; 
    } else {
        $_SESSION['errors'] = array("Incorrect password.");
        header("Location: login.php"); 
        exit;
    }
} else {
    $_SESSION['errors'] = array("Email not found.");
    header("Location: login.php"); 
    exit;
}

$stmt->close();
$conn->close();

header("Location: Mainpage/index.php"); // Redirect to Mainpage/index.php after successful login
exit;

?>