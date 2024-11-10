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
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #ffffff; /* White background for a clean look */
            color: #4a90e2; 
            border-bottom: 1px solid #e0e0e0; /* Light gray bottom border for subtle separation */
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

        /* Featured Tutors Section */
        .featured-tutors {
            padding: 50px 20px;
            text-align: center;
            background-color: #ffffff; /* White background */
        }

        .featured-tutors h3 {
            font-size: 2em;
            color: #333333; /* Dark gray for headings */
            margin-bottom: 30px;
        }

        .tutor-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .tutor-card {
            width: 200px;
            padding: 15px;
            background-color: #f9fafb; /* Light gray for card background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); /* Light shadow for subtle depth */
            text-align: center;
            border: 1px solid #e0e0e0; /* Light gray border */
        }

        .tutor-card img {
            width: 100%;
            height: auto;
            border-radius: 50%;
        }

        .tutor-card h4 {
            margin-top: 15px;
            font-size: 1.2em;
            color: #4a90e2; /* Blue for tutor names */
        }

        .tutor-card p {
            color: #666666; /* Medium gray for body text */
            font-size: 0.9em;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #ffffff; /* White background */
            color: #4a90e2; /* Blue text */
            border-top: 1px solid #e0e0e0; /* Light gray top border */
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <h1>Tutor Finder</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tutor.php">Tutors</a></li>
            <li><a href="register_tutor.php">Register</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Find the Perfect Tutor for Your Needs</h2>
        <p>Connecting students with expert tutors in various subjects</p>
        <a href="tutor.php" class="btn">Get Started</a>
    </section>

    <!-- Featured Tutors Section -->
    <section class="featured-tutors">
        <h3>Featured Tutors</h3>
        <div class="tutor-list">
            <!-- Tutor Profile Card -->
            <div class="tutor-card">
                <img src="https://via.placeholder.com/150" alt="Tutor 1">
                <h4>John Doe</h4>
                <p>Math Specialist with 5+ years of experience</p>
            </div>
            <div class="tutor-card">
                <img src="https://via.placeholder.com/150" alt="Tutor 2">
                <h4>Jane Smith</h4>
                <p>Science Tutor with a passion for teaching</p>
            </div>
            <div class="tutor-card">
                <img src="https://via.placeholder.com/150" alt="Tutor 3">
                <h4>Emily Brown</h4>
                <p>Experienced English Tutor</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Tutor Finder. All rights reserved.</p>
    </footer>

</body>
</html>
