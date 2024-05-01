<?php
session_start();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";
} else {
    // If form data is not submitted, redirect to contact form
    header("Location: contact.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Commit</title>
    <link rel="stylesheet" href="css/formcommit.css">
</head>
<body>
    <div class="container">
        <h1>Data that we received: </h1>
        <div class="contact-details">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
            <p><strong>Message:</strong> <?php echo htmlspecialchars($message); ?></p>
        </div>
        <button onclick="window.location.href='contact.php'">Go Back to the contact form</button>
        <button onclick="window.location.href='rewiew.php'">Go Back to the review form</button>
    </div>
</body>
</html>
