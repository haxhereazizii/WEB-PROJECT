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
    <link rel="stylesheet" href="css/history.css">
   <script defer src="activepage.js"> </script>
    <title>webpage</title>
</head>
<body>

<!--navbaar --> 
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dear,<span><?php echo $_SESSION['user_name']; ?>
        </span> are you ready to explore the history? </a>
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
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About me
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="aboutme.php">About me</a></li>
            <li><a class="dropdown-item" href="cv.php">CV</a></li>
              <li><a class="dropdown-item" href="rewiew.php">Review us!</a></li>
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
</div>
<!-- Displaying cards with historical information, and creating links for each of them -->
<div class="card-container">

<div class="card"> 
  <img src="pixtures/muzeukombetar.jpg">
  <div class="card-content">
    <h3> The National museum  </h3>
    <p>   The National Museum of Kosovo, founded in 1949, showcases the rich cultural and historical heritage of the region. 
    Its collections span from Neolithic artifacts to medieval Serbian art, providing visitors with a comprehensive view of Kosovo's past. Through exhibits and events, the museum serves as a vital cultural hub, promoting understanding and appreciation of Kosovo's diverse heritage.</p>
    <a href="https://museu.ms/museum/details/15813/kosovo-museum" class="exploremore" target="_blank" >EXPLORE MORE</a>
  </div>
</div>

<div class="card"> 
  <img src="pixtures/kalajaprizrenit.jpg">
  <div class="card-content">
    <h3> Prizren Castle </h3>
    <p>   
Perched majestically above the city of Prizren, the historic Prizren Castle stands as a timeless monument to Kosovo's rich past. Dating back centuries, this imposing fortress offers visitors a captivating glimpse into the region's history and cultural heritage. With its ancient walls and towers, the castle echoes tales of medieval grandeur and resilience,it's a testament to the region's rich history and enduring cultural legacy.</p>
<a href="https://www.kosovo-vacations.com/prizren-fortress.html" class="exploremore" target="_blank" >EXPLORE MORE</a>
  </div>
</div>
<div class="card"> 
  <img src="pixtures/prekaz.jpg">
  <div class="card-content">
    <h3>Jashari's house</h3>
    <p> The Jashari House in Prekaz, Kosovo, is a symbol of resistance and sacrifice in the Kosovo War. It was the family home of Adem Jashari, a key figure in the fight for independence. 
The siege of the house became a defining moment in Kosovo's struggle for freedom, 
and it now stands as a memorial to those who fought for liberation.</p>
  <a href="https://www.atlasobscura.com/places/memorial-complex-adem-jashari" class="exploremore " target="_blank" >EXPLORE MORE</a>
  </div>
</div>

<div class="card"> 
  <img src="pixtures/uraeprizrenit.jpg">
  <div class="card-content">
    <h3>Stone Brige </h3>
    <p> 
The Stone Bridge of Prizren, a timeless symbol of the city's history, spans the tranquil waters of the Bistrica River. Dating back to the medieval era, this architectural marvel has stood as a silent witness to centuries of cultural exchange and historical events. Its sturdy stone arches have endured the test of time, connecting the bustling streets of Prizren and serving as a link between past and present. </p>
<a href="https://culturalbridgepz.org/en/directory/the-stone-bridge/" class="exploremore" target="_blank"  >EXPLORE MORE</a>
  </div>
</div>


</div>
 </div>
</body>
</html>


