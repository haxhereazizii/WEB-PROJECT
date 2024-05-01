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
    <link rel="stylesheet" href="css/aboutme.css">
</head>
<body>
    <header>
        <h1>Hey there, <span><?php echo $_SESSION['user_name']; ?> </span> Welcome to my blog!</h1>
    </header>
    <div class="row">
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

        <div class="right-column">
        <div class="card">
    <h2>Spotify recommendations here!</h2>
    <a href="https://open.spotify.com/playlist/37i9dQZF1E34WaJh3QdfK1?si=bd327d795f894e05">
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

    <footer>
        <h1>Did you see my cv?</h1>
    <a href="cv.php"><button>GO TO CV</button></a>
</footer>
</body>
</html>
