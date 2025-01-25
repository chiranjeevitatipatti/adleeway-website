<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login-register/index.php");
    exit(); // Ensure no further code runs after the redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>

    <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
    <p>This is your profile page.</p>
    
    <!-- You can add more user information here -->
    <p>Name: <?php echo $_SESSION['name']; ?></p>

    <!-- Optionally, add a link to edit the profile or update password -->
    <a href="edit-profile.php">Edit Profile</a>

    <br><br>

    <!-- Logout Link -->
    <a href="logout.php">Logout</a>

</body>
</html>
