<?php
// Connect to your database here (replace with your credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

// Sanitize user input to prevent SQL injection (basic implementation)
$username = htmlspecialchars($username);
$password = htmlspecialchars($password);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Successful login logic here
  echo "Welcome back, " . $username . "!"; // Example message
} else {
  // Login failed logic here (e.g., display error message)
  echo "Invalid username or password.";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dependra Tour and Travel - Login/Signup</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="header-div">
    <header class="header">
      <a href="index.php">Dependra Tour and Travel</a>
      <a href="index.php"><img src="img/logo.jpg"></a>
      <hr style="width:80%">
    </header>
    <center>
      <nav class="menu">
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT US</a>
        <a href="destinations.php">DESTINATIONS</a>
        <a href="traveltips.php">EXPERIENCE</a>
        <a href="contact.php">CONTACT</a>
      </nav>
    </center>
  </div>

  <body>
    <div class="container">
      <div class="login-wrapper">
        <h2>Welcome Back!</h2>
        <form id="login-form" method="post" action="login.php">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <button type="submit">Login</button>
          <span id="login-error-message"></span>
        </form>

        <p>Don't have an account? <a href="#" onclick="showSignup()">Sign Up Here</a></p>

        <div id="signup-form" style="display: none;">
          <h2>Create Your Account</h2>
          <form method="post" action="signup.php">
            <label for="signup_username">Username:</label>
            <input type="text" id="signup_username" name="username" required>
            <label for="signup_password">Password:</label>
            <input type="password" id="signup_password" name="password" required>
            <label for="signup_email">Email:</label>
            <input type="email" id="signup_email" name="email" required>
            <button type="submit">Sign Up</button>
            <span id="signup-error-message"></span>
          </form>
        </div>
      </div>

      <img src="img/Homepage2.png" style="width: 1000px; height: 215px;padding-top:10px">
    </div>

    <footer class="footer">
      Copyright &copy; 2020 - <?php echo date("Y"); ?> Dependra Tour and Travel
    </footer>

    <script>
      function showSignup() {
        document.getElementById("login-form").style.display = "none";
        document.getElementById("signup-form").style.display = "block";
      }
    </script>
  </body>
</html>
