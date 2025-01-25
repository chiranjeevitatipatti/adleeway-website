<?php
include "db_conn.php";  // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data and sanitize it
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    // Hash the password before storing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the data into the users table
    $sql = "INSERT INTO users (user_name, password, name) VALUES ('$username', '$hashed_password', '$name')";

    if (mysqli_query($conn, $sql)) {
        echo "Account created successfully!";
        header("Location: index.php"); // Redirect to login page after successful signup
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        /* Body styling */
        body {
            background: linear-gradient(to bottom, #87CEEB, #B0E0E6); /* Skyblue gradient */
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form container */
        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Heading */
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Input fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #87CEEB;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #1E90FF; /* Darker blue for focus */
            outline: none;
        }

        /* Submit button */
        button {
            background-color: #1E90FF; /* Blue button */
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #4682B4; /* Darker blue on hover */
        }

        /* Create an account link */
        .ca {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #1E90FF; /* Blue link */
            font-weight: bold;
            text-decoration: none;
        }

        .ca:hover {
            color: #4682B4; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <form action="signup.php" method="post">
        <h2>Create Account</h2>
        
        <label for="uname">Username</label>
        <input type="text" name="uname" id="uname" placeholder="Username" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        
        <label for="password_confirm">Confirm Password</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="Confirm Password" required><br>

        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Full Name" required><br>

        <button type="submit">Sign Up</button>
        <a href="index.php" class="ca">Already have an account? Log in</a>
    </form>
</body>
</html>
