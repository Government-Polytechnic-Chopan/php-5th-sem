<?php
// login.php
session_start();
require 'db.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login_sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($login_sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password==$row['password']) {
            $_SESSION['user'] = $row['email']; // Store session
            header('Location: change_password.php');
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No account found with that email!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
    <a href="signup.php">Sign Up Here</a>
</body>
</html>
