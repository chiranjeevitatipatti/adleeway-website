<?php
session_start();  // Start session to store user data

// Include database connection
include "db_conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data and sanitize it
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // SQL query to fetch the user with matching username
    $sql = "SELECT * FROM users WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);  // Fetch user data

        // Check if the password matches
        if (password_verify($password, $row['password'])) {
            // Password is correct, create session variables
            $_SESSION['id'] = $row['id'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];

            // Redirect to the home page or protected area
            header("Location: home.php");  // Replace 'home.php' with your actual landing page
            exit();
        } else {
            // Password is incorrect
            header("Location: index.php?error=Incorrect password");
            exit();
        }
    } else {
        // User not found
        header("Location: index.php?error=No user found with that username");
        exit();
    }
}
?>

<!-- HTML form for login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        /* Error message */
        .error {
            color: #FF6347; /* Red color for errors */
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
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
    <form action="index.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <label for="uname">Username</label>
        <input type="text" name="uname" id="uname" placeholder="Username" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required><br>

        <button type="submit">Login</button>
        <a href="signup.php" class="ca">Create an account</a>
    </form>
</body>
</html>
