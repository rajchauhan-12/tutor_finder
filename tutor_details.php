<?php

include 'includes/config.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $tutor_id = $_GET['id'];

    $sql = "SELECT name, email, created_at FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $tutor_id, PDO::PARAM_INT);
    $stmt->execute();
    $tutor = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the tutor exists
    if (!$tutor) {
        echo "<p>Tutor not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid tutor ID.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tutor['name']); ?>'s Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafb; /* Light gray */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 600px;
            width: 90%;
            background: #ffffff; /* White background for container */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4a90e2; /* Soft blue for heading */
            margin-bottom: 15px;
        }

        p {
            margin: 10px 0;
            font-size: 1em;
        }

        .benefits {
            margin-top: 20px;
            padding: 15px;
            background: #f1f5f9; /* Light blue-gray background for benefits */
            border-radius: 8px;
            color: #333;
        }

        .benefits h3 {
            color: #4a90e2; /* Consistent soft blue for subheading */
        }

        .benefits ul {
            margin: 0;
            padding-left: 20px;
            list-style-type: disc;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2><?php echo htmlspecialchars($tutor['name']); ?>'s Profile</h2>
        <p>Email: <?php echo htmlspecialchars($tutor['email']); ?></p>
        <p>Joined on: <?php echo date('F j, Y', strtotime($tutor['created_at'])); ?></p>

        <div class="benefits">
            <h3>Benefits of Our Platform</h3>
            <ul>
                <li>Access to a wide range of students looking for tutoring.</li>
                <li>Personalized profile to showcase your skills and expertise.</li>
                <li>Opportunities for growth through feedback and performance tracking.</li>
                <li>Support from our dedicated team to enhance your teaching experience.</li>
                <li>Flexible working hours and online/offline tutoring options.</li>
            </ul>
        </div>
    </div>

</body>
</html>
