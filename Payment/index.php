<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Payment Information</h1>
        <form action="process_payment.php" method="POST">
            <div class="form-group">
                <label for="card-type">Card Type:</label>
                <select id="card-type" name="card-type">
                    <option value="visa">Visa</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="amex">American Express</option>
                </select>
            </div>
            <div class="form-group">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiration-date">Expiration Date:</label>
                <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YYYY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <label for="name-on-card">Name on Card:</label>
                <input type="text" id="name-on-card" name="name-on-card" required>
            </div>
            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>
</html>