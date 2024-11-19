<?php
// Include the database configuration file
include 'includes/config.php';

// Start session to track logged-in users
session_start();

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Get the logged-in user's name
$userName = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Tutor</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb; /* Light gray background */
            color: #333333; /* Dark gray text */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the page spans the full height */
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #ffffff; /* White background for a clean look */
            color: #4a90e2; 
            border-bottom: 1px solid #e0e0e0; /* Light gray bottom border */
        }

        nav h1 {
            font-size: 1.5em;
            color: #4a90e2; /* Soft blue for the title */
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        nav ul li a {
            color: #4a90e2; /* Blue for links */
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #357ABD; /* Slightly darker blue on hover */
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 80px 20px;
            background-color: #f1f5f9; /* Very light blue background */
            color: #333333;
            flex-grow: 1; /* Ensure the hero section expands to fill available space */
        }

        .hero h2 {
            font-size: 2.5em;
            margin-bottom: 15px;
            color: #333333; /* Dark gray for strong contrast */
        }

        .hero p {
            font-size: 1.2em;
            color: #666666; /* Medium gray for body text */
            margin-bottom: 30px;
        }

        .hero .btn {
            padding: 10px 25px;
            background-color: #4a90e2; /* Blue button */
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .hero .btn:hover {
            background-color: #357ABD; /* Darker blue on hover */
        }

        /* Footer Section */
        footer {
            background-color: #4a90e2; /* Blue background */
            color: white; /* White text */
            text-align: center;
            padding: 20px;
            font-size: 1.2em;
            margin-top: auto; /* Push the footer to the bottom */
        }

        footer span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <h1>Tutor Finder</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="register_tutor.php">Register</a></li>
                <li><a href="tutor.php">Tutors</a></li>
                <li><a href="index.php?logout=1">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Find the Perfect Tutor for Your Needs</h2>
        <p>Connecting students with expert tutors in various subjects</p>
        <a href="tutor.php" class="btn">Get Started</a>
    </section>

    <!-- Footer -->
    <footer>
        Welcome to <span><?php echo htmlspecialchars($userName ?: 'Tutor Finder'); ?></span>
    </footer>
</body>
</html>
