<?php
@include 'config.php';
session_start();
if(!isset(  $_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>webpage</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dear,<span><?php echo $_SESSION['user_name']; ?></span> Feel free to contact me!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="moreaboutkosovo.php">More about Kosovo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="history.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contry.php">API</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About me
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="aboutme.php">About me</a></li>

            <li><a class="dropdown-item" href="cv.php">CV</a></li>
              <li><a class="dropdown-item" href="rewiew.php">Rewiew us!</a></li>
           
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="contact.php">Contact me!</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user_page.php">First Page</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">
   <!-- the function of the java script code is called here! -->
<form onsubmit="return validateForm()" action="formcommit.php" method="post" target="_blank">
    <h3>CONTACT ME</h3>
    <input type="text" name="name" id="name" placeholder="Your name here">
    <input type="email" name="email" id="email" placeholder="Your email here">
    <input type="text" name="phone" id="phone" placeholder="Your phone number here">
    <textarea name="message" id="message" rows="7" placeholder="How can I help you?"></textarea>
   
    <div class="button-container">
        <button type="submit">Send</button>
        <button type="button" onclick="clearForm()">CLEAR</button>  <!-- clear the form function is called here -->
    </div>
</form>
</div>
 <!-- validation form function that checks the datta if its filed correctly! -->
<script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var message = document.getElementById("message").value;
        var errorMessage = "";

        // Check if name is empty
        if (name == "") {
            errorMessage += "*Name is missing.\n";
        }

        // Check if email is empty or invalid
        if (email == "") {
            errorMessage += "*Email is missing.\n";
        } else if (email.indexOf("@") == -1) {
            errorMessage += "*Email is invalid.\n";
        }

        // Check if phone number is empty or invalid
        if (phone == "") {
            errorMessage += "*Phone number is missing.\n";
        } else if (!/^\d+$/.test(phone)) {
            errorMessage += "*Phone number is invalid (should contain only digits).\n";
        }

        // Check if message is empty
        if (message == "") {
            errorMessage += "*Message is missing.\n";
        }

        // If any error message is generated, display it and prevent form submission
        if (errorMessage != "") {
            alert(errorMessage);
            return false;
        }

        // If all fields are filled and valid, allow form submission
        return true;
    }
// clear the data on the form
    function clearForm() {
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("message").value = "";
    }
</script>
</body>
</html>
