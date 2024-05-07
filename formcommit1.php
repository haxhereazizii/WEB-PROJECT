<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data from POST request
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';
    $visit = isset($_POST['visit']) ? $_POST['visit'] : '';

}

$ratingsMap = [
    '1' => '1 Star',
    '2' => '2 Stars',
    '3' => '3 Stars',
    '4' => '4 Stars',
    '5' => '5 Stars'
];


$selectedRating = isset($ratingsMap[$rating]) ? $ratingsMap[$rating] : '';

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
            <p><strong>VISITING KOSOVO:</strong> <?php echo htmlspecialchars($visit); ?></p>
            <p><strong>RATING:</strong> <?php echo htmlspecialchars($rating); ?></p>
          
        </div>
        <button onclick="window.location.href='rewiew.php'">Go Back to the rewiew form</button>
      
    </div>
</body>
</html>
