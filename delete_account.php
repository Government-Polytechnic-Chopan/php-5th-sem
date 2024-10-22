<?php
// delete_account.php
session_start();
require 'db.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

if (isset($_POST['delete_account'])) {
    $email = $_SESSION['user'];
    $delete_sql = "DELETE FROM users WHERE email='$email'";

    if ($conn->query($delete_sql) === TRUE) {
        session_destroy(); // Destroy session after account deletion
        echo "Account deleted successfully!";
        header('Location: signup.php');
    } else {
        echo "Error deleting account: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Account</title>
</head>
<body>
    <h2>Delete Account</h2>
    <form method="post">
        <input type="submit" name="delete_account" value="Delete Account">
    </form>
    <a href="change_password.php">Back to Change Password</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
