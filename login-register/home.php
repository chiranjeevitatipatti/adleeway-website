<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    // User is logged in, redirect to index.html (the home page)
    header("Location: index1.php");
    exit();
} else {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}
?>
