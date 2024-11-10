<?php
// Include the database configuration
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password hashing

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        echo "<p>Registration successful! <a href='index.php'>Go to Home</a></p>";
    } else {
        echo "<p>There was an error. Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9fafb; /* Light gray background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333333;
        }

        /* Container for form */
        .register-form {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            margin: 20px;
            background: #ffffff; /* White background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-form h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #4a90e2; /* Soft blue for heading */
        }

        /* Input fields */
        .register-form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
            outline: none;
        }

        /* Input fields on focus */
        .register-form input:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }

        /* Submit button */
        .register-form button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background: #4a90e2; /* Blue button */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background 0.3s;
        }

        .register-form button:hover {
            background: #357ABD; /* Darker blue on hover */
        }

        /* Link styling */
        .register-form a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #4a90e2;
            transition: color 0.3s;
        }

        .register-form a:hover {
            color: #357ABD;
        }
    </style>
</head>
<body>

<div class="register-form">
    <h2>Register as a Tutor</h2>
    <form action="register_tutor.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
        <a href="index.php">Back to Home</a>
    </form>
</div>

</body>
</html>
