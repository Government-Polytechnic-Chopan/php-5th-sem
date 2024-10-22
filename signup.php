<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form method="post">
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>
    <a href="login.php">Login Here</a>
</body>
</html>




<?php
// signup.php
session_start();
require 'db.php';

if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain password
    $insert_sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Sign-up successful!";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}
?>

