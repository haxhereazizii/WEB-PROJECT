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
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/aboutme.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
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
    <header>
        <h1>Hey there, <span><?php echo $_SESSION['user_name']; ?> </span> Welcome to my blog!</h1>
    </header>
    <!-- Main content -->
    <div class="row">
       <!-- Left column to be cssed-->
        <div class="left-column">

            <div class="card">
                <h2>I love reading books, expecialy if they are mystery ones!</h2>
                <img src="pixtures/kitap.jpg" alt="blog">
                <p> Book time is coming up and I can barely contain myself! Got my favorite blanket and a steaming cup of tea ready for some serious reading adventures. #bliss</p>
            </div>

            <div class="card">
                <h2>I Love going to the movie festivals</h2>
                <img src="pixtures/movieth.jpeg" alt="blog">
                <p> Just had the most amazing time at Anibar and Dokufest!  So many incredible animated and documentary films, plus a fantastic atmosphere.  Feeling super inspired and already looking forward to next year's festivals!  #Anibar #Dokufest #FilmFestivals</p>
            </div>
          
            <div class="card">
                <h2>I Love treveling, you know new adventures!</h2>
                <img src="pixtures/travel.jpg" alt="blog">
                <p> Imagine waking up to a sunrise over a landscape you've never seen before.  Travel isn't just about the destination, it's about the journey, the new experiences, and the cultures waiting to be discovered.  Where will your next adventure take you?  #TheWorldAwaits  #TravelMore</p>
            </div>
           
        </div>
<!-- Right column to be css -->
        <div class="right-column">
        <div class="card">
    <h2>Spotify recommendations here!</h2>
    <a href="https://open.spotify.com/playlist/37i9dQZF1E34WaJh3QdfK1?si=bd327d795f894e05" target="_blank">
        <img src="pixtures/spotify.jpg" alt="me">
    </a>
    <p>click up for more!</p>
      </div>

            <div class="card">
                <h2>New book recommendations!</h2>
                <img src="pixtures/agathabook.jpg" alt="popular">
                <img src="pixtures/agathabook1.jpg" alt="popular">
                <img src="pixtures/agathabook2.jpg" alt="popular"> 
                <a href="https://www.agathachristie.com/en/stories" target="_blank" ><button>BUY</button></a>
            </div>
            <div class="card">
    <h3>Follow me!</h3>
    <p>
        <a href="https://www.instagram.com/haxhereazizii/" target="_blank">CLICK TO see my Instagram account!</a>
        
    </p>
</div>

        </div>
    </div>
 <!-- Footer of blog -->
    <footer>
        <h1>Did you see my cv?</h1>
    <a href="cv.php"><button>GO TO CV</button></a>
</footer>
</body>
</html>
