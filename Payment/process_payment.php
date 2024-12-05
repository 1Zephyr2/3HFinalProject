<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardType = htmlspecialchars($_POST['card-type']);
    $cardNumber = htmlspecialchars($_POST['card-number']);
    $expirationDate = htmlspecialchars($_POST['expiration-date']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $nameOnCard = htmlspecialchars($_POST['name-on-card']);

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
} else {
    echo "Invalid request.";
}
?>