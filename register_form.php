
<!-- created the php code thet gets the data and checks -->

<?php
 @include 'config.php';
 // Check if the form is submitted
if(isset($_POST['submit'])){
  // Escape user inputs to prevent SQL injection
  $name= mysqli_real_escape_string($conn,$_POST['name']);
  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $pass= md5($_POST['password']);  // Encrypt password for security
  $cpass= md5($_POST['cpassword']); // Encrypt password for security
  $user_type= $_POST['user_type'];  // Get user type from form, dip note admin part is for later because i am thinking of improving this project 

    // Check if user with the same email and password already exists
  $select ="SELECT * FROM user_form WHERE email = '$email'&& password='$pass'";
  $result = mysqli_query($conn, $select);

   // If user already exists, display an error message
  if (mysqli_num_rows($result)>0){
    $errorr[]= 'User already exist!!';
  }
  else{
    // If passwords match, insert new user into the database, if not the alert
    if($pass != $cpass){
        $errorr[]= 'Password isnt mached!!';
    } else{
        $insert ="INSERT INTO user_form (name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')" ;
        mysqli_query($conn, $insert);
        header('location:login_form.php');
   
    }
  }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form </title>

    <link rel="stylesheet" href="css/style.css"> <!--css link-->

</head>
<body>
    

<div class="form-container">
<form action="" method="post"> 
<h3> Register now! </h3>


<?php 
if(isset($error)){  // Display error messages
    foreach($error as $error){
        echo '<span class="error-msg">' .$error.'</span>';
    };
};
?>
<input type="text" name="name" required placeholder ="Enter your name"> <!-- Input field for name -->
<input type="email" name="email" required placeholder ="Enter your email"> <!-- Input field for mail, with mail format -->
<input type="password" name="password" required placeholder ="Enter your password"> <!-- Input field for password-->
<input type="password" name="cpassword" required placeholder ="Confirm your password"> <!-- Input field for confirm password -->
<select name="user_type">
<option value="user"> User </option> <!-- type user -->
<option value= "admin"> Admin </option>  <!-- type admin  for later-->
</select>
<!-- Submit button -->
<input type="submit" name="submit" value="register now" class="form-btn">
<!-- Link to login form -->
<p> Already have an account? <a href="login_form.php">Login Now </p>

</form>

</body>
</html>