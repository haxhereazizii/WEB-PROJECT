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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--JAVA SCRIPT FRAMEWORK!!!! -->
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dear,<span><?php echo $_SESSION['user_name']; ?></span> Feel free to review us!</a>
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
            <a class="nav-link active" aria-current="page" href="contry.php">Contry</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About me
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="aboutme.php" target="blank">About me</a></li>
            <li><a class="dropdown-item" href="cv.php">CV</a></li>
              <li><a class="dropdown-item" href="rewiew.php">Review us!</a></li>
           
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
<form id="reviewForm" method="post" action="formcommit.php" target="_blank">

        <h3>REVIEW US:</h3>
        <input type="text" name="name" id="name" placeholder="Your name here" >
        <input type="email" name="email" id="email" placeholder="Your email here" >
        <input type="text" name="phone" id="phone" placeholder="Your phone number here" >
        <textarea name="message" id="message" rows="7" placeholder="What do you want us to know about, anything to fix?" ></textarea>
       
        <div class="button-container">
            <button type="submit">Send</button>
            <button type="button" onclick="clearForm()">CLEAR</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#reviewForm').submit(function(event) {
            var name = $('#name').val().trim();
            var email = $('#email').val().trim();
            var phone = $('#phone').val().trim();
            var message = $('#message').val().trim();

            if (name === '') {
                alert("Please enter name/surname.");
                event.preventDefault();
                return;
            }

            if (email === '') {
                alert("Please enter a email adress.");
                event.preventDefault();
                return;
            } else if (!validateEmail(email)) {
                alert("Please enter a valid email address.");
                event.preventDefault();
                return;
            }

            if (phone === '') {
                alert("Please enter a phone number.");
                event.preventDefault();
                return;
            } else if (!validatePhone(phone)) {
                alert("Please enter a valid phone number.");
                event.preventDefault();
                return;
            }

            if (message === '') {
                alert("Please enter a message.");
                event.preventDefault();
                return;
            }
            
            // If all validation passes, the form will submit as usual
        });

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }

        function validatePhone(phone) {
            var re = /^\d{10}$/;
            return re.test(phone);
        }
    });
</script>

<script>
    function clearForm() {
        document.getElementById("reviewForm").reset();
    }
</script>

</body>
</html>
