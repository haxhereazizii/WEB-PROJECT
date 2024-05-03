<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])) {  // Checking if the form is submitted
// checking input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
  // Query to check if the user exists
    $select = "SELECT * FROM user_form WHERE email = '$email'&& password='$pass'";
  // Executing the query
    $result = mysqli_query($conn, $select);
// Executing the query
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.php');   // Redirecting to admin page for later!!!
        }
        elseif($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];  // Redirecting to user page
            header('location: user_page.php');
        }
    } 
    else {
        $error[] = 'Incorrect email or password!'; // Error message for incorrect credentials
    }

};
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form </title>

    <link rel="stylesheet" href="css/style.css"> <!--css link-->

</head>
<body>
    

<div class="form-container">
<form action="" method="post"> 
<h3> Login now! </h3>
<?php
// Displaying error messages
if(isset($error)){
    foreach($error as $error){
        echo '<span class="error-msg">' .$error.'</span>';
    };
};
?>
<input type="email" name="email" required placeholder ="Enter your email"> <!-- Input field for email -->
<input type="password" name="password" required placeholder ="Enter your password"> <!-- Input field for password -->
<input type="submit" name="submit" value="login now" class="form-btn"> <!-- Submit button -->
<p> Don't have an account? <a href="register_form.php">Register Now </p>  <!-- Link to registration form -->

</form>

</body>
</html>