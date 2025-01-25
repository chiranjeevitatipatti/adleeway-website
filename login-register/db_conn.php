<?php
$servername = "localhost";  // Database server (usually localhost for XAMPP)
$username = "root";         // Default XAMPP username
$password = "";             // Default is an empty string for XAMPP
$dbname = "test_db";        // The database name (ensure it exists)

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
