<?php
// Include the database configuration file
include 'includes/config.php';

// Fetch all registered tutors
$sql = "SELECT id, name, email, created_at FROM users"; // Assuming you have an 'id' column
$stmt = $pdo->prepare($sql);
$stmt->execute();
$tutors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Tutors</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafb; /* Light gray background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 800px;
            width: 90%;
            background: #ffffff; /* White background for container */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #4a90e2; /* Soft blue for heading */
        }

        .tutor-card {
            margin: 15px 0;
            padding: 20px;
            background-color: #f4f4f9; /* Light gray background for cards */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .tutor-card:hover {
            transform: scale(1.02);
        }

        .tutor-card h3 {
            margin: 0 0 10px;
            font-size: 1.6em;
            color: #333;
        }

        .tutor-card p {
            margin: 5px 0;
            color: #666;
            font-size: 0.95em;
        }

        .tutor-card a {
            text-decoration: none;
            color: #4a90e2; /* Soft blue for link */
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
        }

        .no-tutors {
            color: #888;
            font-size: 1em;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Registered Tutors</h2>
        <?php if (count($tutors) > 0): ?>
            <div>
                <?php foreach ($tutors as $tutor): ?>
                    <div class="tutor-card">
                        <h3><?php echo htmlspecialchars($tutor['name']); ?></h3>
                        <p>Email: <?php echo htmlspecialchars($tutor['email']); ?></p>
                        <p>Joined on: <?php echo date('F j, Y', strtotime($tutor['created_at'])); ?></p>
                        <a href="tutor_details.php?id=<?php echo $tutor['id']; ?>">View Details</a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="no-tutors">No tutors found.</p>
        <?php endif; ?>
    </div>

</body>
</html>
