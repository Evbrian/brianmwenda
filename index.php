<?php
// Start the session to manage user login state
session_start();

// Check if the user is already logged in, if so redirect to dashboard or home
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="style.css">  <!-- Include your styles -->
</head>
<body>
    <div class="container">
        <h2>Welcome to the School Management System</h2>
        
        <p>Choose an option:</p>
        
        <div class="buttons">
            <a href="login.php"><button>Login</button></a>
            <a href="register.php"><button>Register</button></a>
        </div>
    </div>
</body>
</html>
