<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <meta name="description" content="Web site created using create-react-app" />
  <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
  <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <title>CodeFest</title>
</head>

<body>
  <header>
    <h2 class="logo">CodeFest</h2>
    <nav class="navi">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
      <button class="btnLogin">Login</button>
    </nav>
  </header>
  <div class="wrapper">
    <span class="exit"><ion-icon name="close-circle"></ion-icon></span>
    <div class="form-box login">
      <h2>Login</h2>
      <form action="/src/UI/includes/login.inc.php" target="_self" method="post">
        <div class="input">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="email" name="email">
          <label>Email</label>
        </div>
        <div class="input">
          <input type="password" id="toggle_password" name="pwd">
          <label>Password</label>
          <i id="show_password" class="fa fa-eye"></i>
        </div>
        <div class="remFor">
          <label><input type="checkbox" required>Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register">
          <p>Don't have an Account?<a href="#" class="reg-link">Sign Up</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <h2>Registration</h2>
      <form action="/src/UI/includes/signup.inc.php" target="_self" method="post">
        <div class="input">
          <span class="icon"><ion-icon name="person"></ion-icon></span>
          <input type="name" name="username">
          <label>Username</label>
        </div>
        <div class="input">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="email" name="email">
          <label>Email</label>
        </div>
        <div class="input">
          <input type="password" id="reg_toggle" name="pwd">
          <label>Password</label>
          <i id="reg_password" class="fa fa-eye"></i>
        </div>
        <div class="remFor">
          <label><input type="checkbox" required>I agree to the terms & conditions</label>
        </div>
        <button type="submit" class="btn">Sign In</button>
        <div class="register">
          <p>Already have an Account?<a href="#" class="login-link">Login</a></p>
        </div>
      </form>
    </div>
  </div>

  <script src="login.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>