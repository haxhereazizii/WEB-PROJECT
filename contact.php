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
    <link rel="stylesheet" href="css/contact.css">
    <title>webpage</title>
</head>
<body>

<!--navbaar --> 
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dear,<span><?php echo $_SESSION['user_name']; ?>
        </span> Feel free to contact me!</a>
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
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About me
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="hobbies.php">Hobbies</a></li>
              <li><a class="dropdown-item" href="cv.php">CV</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
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
<<<<<<< HEAD
  <form >
=======
  <form onsubmit="sendEmail(); reset(); return false;">
>>>>>>> 3ff9f7ed230024b047e5ab3b9ba1b933a5df7c6f
    <h3>CONTACT ME</h3>
    <input type="text" id="name" placeholder="Your name here" required >
    <input type="email" id="email" placeholder="Your email here" required >
    <input type="text" id="phone" placeholder="Your phone number here" required >
  <textarea  id="message"  rows="7" placeholder="How can I help you?" required></textarea>
  <button type="submit">Send </button>
</form>
 </div>


</div>
 
<<<<<<< HEAD


=======
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
function sendEmail() {
  var userName = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  var message = document.getElementById('message').value;
  var messageBody = "Name: " + userName + "<br/> Phone: " + phone + "<br/> Email: " + email + "<br/> Message: " + message;
  
  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "nowayjerry22@gmail.com",
    Password: "9D290013AD70101A03DAE236602A616EAE19",
    Port: 2525,
    To: 'haxhere.azizi24@gmail.com',
    From: "nowayjerry22@gmail.com",
    Subject: "WEB PAGE CONTACT FORM",
    Body: messageBody
  }).then(
    message => alert("Message sent successfully")
  ).catch(
    error => alert("Error: " + JSON.stringify(error))
  );
}
</script>
>>>>>>> 3ff9f7ed230024b047e5ab3b9ba1b933a5df7c6f




</body>
<<<<<<< HEAD
=======

</html>

>>>>>>> 3ff9f7ed230024b047e5ab3b9ba1b933a5df7c6f

</html>