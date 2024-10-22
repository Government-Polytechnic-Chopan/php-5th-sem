<?php
// db.php
$host = 'localhost';
$dbname = 'gpc';
$username = 'hero';
$password = 'venom';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
  //  echo "hero Swagat hai aapka database me";
}





// Create users table if not exists
$table_sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
$conn->query($table_sql);


//echo "table ban gaya";

?>






