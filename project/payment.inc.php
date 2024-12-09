<?php

// Database connection details
$host = 'localhost';
$db = 'cit17'; 
$user = 'root'; 
$password = ''; 

$conn = new mysqli($host, $user, $password, $db); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardType = $_POST['card-type'];
    $cardNumber = $_POST['card-number']; 
    $expirationDate = $_POST['expiration-date'];
    $cvv = $_POST['cvv'];
    $nameOnCard = $_POST['name-on-card'];
    if (empty($cardType) || empty($cardNumber) || empty($expirationDate) || empty($cvv) || empty($nameOnCard)) {
        echo "All fields are required.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO payments (card_type, card_number, expiration_date, cvv, name_on_card) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $cardType, $cardNumber, $expirationDate, $cvv, $nameOnCard); 

    if ($stmt->execute()) {
        echo "<h1>Payment Confirmation</h1>";
        echo "<p>Thank you for your payment!</p>";
        echo "<p>Your payment details:</p>";
        echo "<ul>";
        echo "<li>Card Type: $cardType</li>";
        echo "<li>Card Number: $cardNumber</li>";
        echo "<li>Expiration Date: $expirationDate</li>";
        echo "<li>CVV: $cvv</li>";
        echo "<li>Name on Card: $nameOnCard</li>";
        echo "</ul>";
        exit;
    } else {
        echo "Error: " . $stmt->error; 
        exit;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}

?>