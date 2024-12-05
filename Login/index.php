<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Therapy Booking Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to MedTherapy</h1>
        <h3>Healing minds</h3>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Email</label>
                <input type="email" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p class="message">Not registered? <a href="create-account.php">Create an account</a></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>