<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="style2.css" />
</head>
<body>

  <div class="login-container">
    <h2>☕ Welcome Back! ☕</h2>

    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Enter your email" required>
      <input type="password" name="password" placeholder="Enter your password" required>

      <button type="submit" class="submit-button">Submit</button>
    </form>

    <div class="signup-link">
      <label>Don't have an account?</label>
      <a href="signup.php">Click here</a>
    </div>
  </div>

</body>
</html>
