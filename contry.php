<?php
@include 'config.php';
session_start();
if(!isset(  $_SESSION['user_name'])){
    header('location:login_form.php');
}

?>


<style>
        body {
            background-color: #FFE4E5 !important;
        }
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/contryy.css">
  
    <title>webpage</title>
</head>
<body>

<!--navbaar --> 
<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dear,<span><?php echo $_SESSION['user_name']; ?>
        </span> Enjoy, the movies!</a>
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
<div class="pageclr">
    <h1>Movie Search API</h1>
     <!-- Form for searching movies -->
    <form action="">
  <input type="text" class="search-box" placeholder="Search for movie...">
  <button class="search-btn">Search</button>
</form>
</div>
<!-- Container for displaying images after api  -->
    <div class="image-container">
        </div>
     <script src="./main.js"></script>
        </div>


<!--API ADDED HERE!!!!! TV MAZE API -->

<!-- JavaScript for interacting with the API and displaying images -->
<script>
  const form = document.querySelector('form')
const gallery = document.querySelector('.image-container');


form.addEventListener('submit',(e)=>{
    e.preventDefault();
    let query=form.querySelector('input').value;
    form.querySelector('input').value='';
    
    if(query==''){
        query="nothing";
    }
    tvMazeApi(query);
})
  // Function to fetch data from the TV Maze API
async function tvMazeApi(query){
    const res=await fetch(`https://api.tvmaze.com/search/shows?q=${query}`);
    const shows=await res.json();
    
    makeImages(shows);
}
  // Function to create and display images
function makeImages(shows) {
    for(let show of shows)
    {
        if(show.show.image)
        {   
            console.log(show.show.image.medium);
            const img = document.createElement('img');
            img.src=show.show.image.medium;
            gallery.append(img);
        }
    }
}
</script>
</body>
</html>


