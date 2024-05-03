<?php
@include 'config.php';
session_start();
if(!isset( $_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>



<!Doctype html>
<html>
<head> 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> admin page </title>
<!--custom css file -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
 <!-- admin page is created for later!-->
    <div class="content">
        <h3> hi, <span>   <?php echo $_SESSION['admin_name']; ?>
        </span> </h3>
        <h1> Welcome to  KOSOVO the wonderland!
            <span> </span> <h1>
            <p> This is an admin page </p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn"> logout</a>


        </div>
        
</body>


</html>
