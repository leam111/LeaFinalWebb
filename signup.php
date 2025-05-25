<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up 🌱</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="signup-container">
        <h2>🌼 Create Your Account</h2>
        <form action="signup.php" method="POST">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Create Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <a href="#" class="signup-button" onclick="this.closest('form').submit(); return false;">Sign Up</a>
        </form>
        <p class="login-link">Already have an account? <a href="loginpage.php">Log in</a></p>
    </div>
</body>
</html>
