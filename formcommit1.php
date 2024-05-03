
<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Retrieve form data from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

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
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>   <!-- postes the data to the review form -->
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
            <p><strong>Message:</strong> <?php echo htmlspecialchars($message); ?></p>
        </div>
        <button onclick="window.location.href='rewiew.php'">Go Back to the rewiew form</button>
      
    </div>
</body>
</html>