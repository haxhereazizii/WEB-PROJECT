<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
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
    <link rel="stylesheet" href="css/cv.css">
   <script defer src="activepage.js"> </script>
    <title>webpage</title>
</head>
<body>

<!--navbaar --> 
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dear,<span><?php echo $_SESSION['user_name']; ?>
        </span> Get to know me more!</a>
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
            <li><a class="dropdown-item" href="aboutme.php" target="blank">About me</a></li>
            <li><a class="dropdown-item" href="cv.php">CV</a></li>
              <li><a class="dropdown-item" href="rewiew.php">Review us</a></li>
             
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

<main class="container">
<section class="header">
  <div class="img_area">
    <img src="pixtures/5068379120 (2).jpg" alt="">
  </div>
  <h1>HAXHERE AZIZI</h1>
  <h3>Computer engineering student</h3>
</section>
<section class="main">
  <aside class="left">
    <h2>Contact information</h2>

    <p> <strong>Email:</strong>haxhere.azizi24@gmail.com</p>
    <p> <strong>Number:</strong>506 000 000</p>
    <p> <strong>Adress:</strong>
    Kosovo, Gjilan, Dobercan,
Mehmet Ali Behluli Street

  </p>
    <h2>Skills </h2>
    <ul>
      <li>Programming languages</li>
      <li> Project development</li>
      <li> Content creation</li>
      <li>Research</li>
      <li>Presentation</li>
  </ul>
       <h2>Education</h2>
       <h3> Sakarya Faculty of computer engineering and information sciences</h3>
       <p> Major computer engineering (first year)- Türkiye </p>
       <h3>Science high school “Xhavit Ahmeti”</h3>
       <p>Graduated at 2023-Kosovo</p>
  </aside>
  <article class="right">
    <h2>Work experience</h2>
    <h3> Career club of Xhavit Ahmeti</h3>
    <p><strong>Position:</strong>Event organizer</p>
  <ul>
  <li>I organized sessions with professionals where young people
exchange and got information about the job they were
interested about
 </li>
  </ul>  <br>
  <h3>Laboratori Yt </h3>
  <p><strong>Position:</strong>Project manager</p>
  <ul>
  <li>I planned a schedule for implementation and managed 4000
euros during the implementation process</li>
  </ul> <br>
  <h3> NGO TOKA </h3>
    <p><strong>Position:</strong>Youth leader</p>
  <ul>
  <li> I contacted businesses
in Kosovo for partnership in Solidarity action day in 2023, and represented Kosovo in actival a youth festival in Germany

 </li>
  </ul>
  </article>
</section>
</main>

</body>
</html>
