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
    <link rel="stylesheet" href="css/moreaboutkosovo.css">
    <script defer src="activepage.js"> </script>
    <title>webpage</title>
</head>
<body>

<!--navbaar --> 
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dear,<span><?php echo $_SESSION['user_name']; ?>
        </span> Enjoy the beauty of Kosovo!</a>
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

          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user_page.php">First Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user_page.php">.....</a>
          </li>
        </ul>
        
       
      </div>
    </div>
  </div>
</nav>
</div>
 <div class="card-container">

  <div class="card"> 
    <img src="pixtures/cardpixprishtina.jpg">
    <div class="card-content">
      <h3> Prishtina </h3>
      <p> Prishtina, Kosovo's vibrant capital, merges history and modernity in its lively streets and diverse culture.</p>
     
    </div>
  </div>
 
  <div class="card"> 
    <img src="pixtures/cardpixprizren.jpg">
    <div class="card-content">
      <h3> Prizren </h3>
      <p> Prizren, a jewel landscape, captivates with its ancient charm and scenic beauty,historical wonders meet tranquil riverbanks.</p>
      
    </div>
  </div>
  <div class="card"> 
    <img src="pixtures/cardpixpeja.jpg">
    <div class="card-content">
      <h3>Peja</h3>
      <p> Peja, nestled amidst Kosovo's majestic mountains, mesmerizes with its natural splendor and rich heritage.</p>
    
    </div>
  </div>

  <div class="card"> 
    <img src="pixtures/cardpixrugova.jpg">
    <div class="card-content">
      <h3>Rugove </h3>
      <p> Rugova offers an enchanting retreat for nature enthusiasts and adventurers alike, nestled in Kosovo's picturesque landscapes</p>
   
    </div>
  </div>
  <div class="card"> 
    <img src="pixtures/driniibardhe.jpg">
    <div class="card-content">
      <h3> Drini i bardhe</h3>
      <p> Drini i Bardhë, or the White Drin, is a scenic river in Kosovo, cherished for its beauty and cultural significance. </p>
     
    </div>
  </div>
  <div class="card"> 
    <img src="pixtures/maletesharrit.jpg">
    <div class="card-content">
      <h3> Sharr mountains </h3>
      <p> The sharr mountains are a breathtaking natural wonder known for their rugged beauty and diverse ecosystems.</p>
     
    </div>
  </div>
  <div class="card"> 
    <img src="pixtures/gjakova.jpg">
    <div class="card-content">
      <h3> Gjakova </h3>
      <p>  Gjakova boasts a rich tapestry of architectural wonders, including Ottoman-era mosques, traditional bazaars, and centuries-old bridges.</p>
     
    </div>
  </div><div class="card"> 
    <img src="pixtures/gjilan.jpg">
    <div class="card-content">
      <h3> Gjilan </h3>
      <p> Moreover, Gjilan is a melting pot of cultures, with influences from various ethnicities and backgrounds shaping its unique identity. </p>
     
    </div>
  </div>
</div>
</body>