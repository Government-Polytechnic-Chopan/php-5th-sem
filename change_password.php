<?php
// change_password.php
session_start();
require 'db.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

if (isset($_POST['update_password'])) {
    $email = $_SESSION['user'];
    $new_password = $_POST['new_password'];
    $update_sql = "UPDATE users SET password='$new_password' WHERE email='$email'";

    if ($conn->query($update_sql) === TRUE) {
        echo "Password updated successfully!";
    } else {
        echo "Error updating password: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h2>Change Password</h2>
    <form method="post">
        New Password: <input type="password" name="new_password" required><br>
        <input type="submit" name="update_password" value="Change Password">
    </form>
    <a href="delete_account.php">Delete Account</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
