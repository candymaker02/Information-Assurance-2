<?php
$host = "localhost";
$user = "root"; // Default user for XAMPP
$pass = ""; // No password by default in XAMPP
$db = "encryptionias2";

$conn = new mysqli(hostname: $host, username: $user, password: $pass, database: $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>