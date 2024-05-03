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
    <link rel="stylesheet" href="css/moreaboutkosovo.css">
    <style>
     /* Additional CSS styles for the info box after java script is executed*/
#country-info {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    z-index: 9999;
    max-width: 80%;
    max-height: 80%;
    overflow-y: auto;
    text-align: center; /* Center align content */
    box-sizing: border-box; /* Ensure padding and border are included in width */
}

/* Close button style */
#close-btn {
    cursor: pointer;
    color: crimson;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: pink;
    padding: 5px 10px;
    border-radius: 5px;
}



    </style>
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
   <!-- Card elements that on click shows the contry info box and the google maps links created down in js -->
<div class="card-container">
    <div class="card" onclick="showCountryInfo('Prishtina', 'Explore the vibrant café culture of Prishtina, where you can enjoy a traditional macchiato while soaking in the city\'s lively atmosphere and street art.')">
        <img src="pixtures/cardpixprishtina.jpg">
        <div class="card-content">
            <h3>Prishtina</h3>
            <p>Prishtina, Kosovo's vibrant capital, merges history and modernity in its lively streets and diverse culture.</p>
        </div>
    </div>

    <div class="card" onclick="showCountryInfo('Prizren', 'Visit the historic Prizren Castle, perched on a hill overlooking the city, and admire panoramic views of the Old Town and surrounding mountains.')">
        <img src="pixtures/cardpixprizren.jpg">
        <div class="card-content">
            <h3>Prizren</h3>
            <p>Prizren, a jewel landscape, captivates with its ancient charm and scenic beauty, historical wonders meet tranquil riverbanks.</p>
        </div>
    </div>

    <div class="card" onclick="showCountryInfo('Peja', 'Don\'t miss the Rugova Gorge, a breathtaking natural wonder just a short drive from the city center, offering hiking trails and stunning scenery.')">
        <img src="pixtures/cardpixpeja.jpg">
        <div class="card-content">
            <h3>Peja</h3>
            <p>Peja, nestled amidst Kosovo's majestic mountains, mesmerizes with its natural splendor and rich heritage.</p>
        </div>
    </div>

    <div class="card" onclick="showCountryInfo('Rugove', 'Explore the pristine beauty of Rugova Valley, where you can hike along the scenic trails, visit the iconic Rugova Canyon, and enjoy outdoor activities such as rock climbing and zip-lining.')">
        <img src="pixtures/cardpixrugova.jpg">
        <div class="card-content">
            <h3>Rugove</h3>
            <p>Rugova offers an enchanting retreat for nature enthusiasts and adventurers alike, nestled in Kosovo's picturesque landscapes.</p>
        </div>
    </div>

    <div class="card" onclick="showCountryInfo('Drini i bardhe', 'Embark on a tranquil boat ride along the White Drin River, where you can admire the stunning scenery of lush greenery and crystal-clear waters, and discover hidden caves and waterfalls.')">
        <img src="pixtures/driniibardhe.jpg">
        <div class="card-content">
            <h3>Drini i bardhe</h3>
            <p>Drini i Bardhë, or the White Drin, is a scenic river in Kosovo, cherished for its beauty and cultural significance.</p>
        </div>
    </div>

    <div class="card" onclick="showCountryInfo('Sharr mountains', 'Embark on an unforgettable adventure in the Sharr Mountains, where you can hike through pristine forests, discover hidden waterfalls, and enjoy panoramic views of the surrounding landscapes.')">
        <img src="pixtures/maletesharrit.jpg">
        <div class="card-content">
            <h3>Sharr mountains</h3>
            <p>The Sharr mountains are a breathtaking natural wonder known for their rugged beauty and diverse ecosystems.</p>
        </div>
    </div>

    <div class="card" onclick="showCountryInfo('Gjakova', 'Explore the rich architectural heritage of Gjakova, where you can stroll through cobblestone streets, visit Ottoman-era mosques, and admire traditional bazaars and centuries-old bridges.')">
        <img src="pixtures/gjakova.jpg">
        <div class="card-content">
            <h3>Gjakova</h3>
            <p>Gjakova boasts a rich tapestry of architectural wonders, including Ottoman-era mosques, traditional bazaars, and centuries-old bridges.</p>
        </div>
    </div>

    <div class="card" onclick="showCountryInfo('Gjilan', 'Experience the vibrant culture of Gjilan, where you can explore bustling markets, sample delicious local cuisine, and immerse yourself in the city's rich history and traditions.')">
        <img src="pixtures/gjilan.jpg">
        <div class="card-content">
            <h3>Gjilan</h3>
            <p>Moreover, Gjilan is a melting pot of cultures, with influences from various ethnicities and backgrounds shaping its unique identity.</p>
        </div>
    </div>
</div>


<div id="country-info">
    <div class="close-btn-container">
        <span id="close-btn" onclick="closeCountryInfo()">Close</span>
    </div>
</div>
<!-- JavaScript function to show and close country info -->
<script>

function showCountryInfo(country, info) {
    // Creating HTML content for country information
    var infoHTML = "<h3>" + country + "</h3>";  // Creating HTML content for country information
    infoHTML += "<p>" + info + "</p>";  // Adding country information as paragraph
     // Adding close button
    infoHTML += '<div class="close-btn-container"><span id="close-btn" onclick="closeCountryInfo()">Close</span></div>'; 
    // Adding an iframe with a Google Maps embed for the country location
    infoHTML += '<iframe width="560" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15010.981291428962!2d20.08101212129072!3d41.281921666043516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1352ebe42057bf7f%3A0x3314cb9cb7b7b3!2sPeja!5e0!3m2!1sen!2s!4v1649183408354!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen></iframe>';
    
        // Setting the generated HTML content to the country-info div
   document.getElementById('country-info').innerHTML = infoHTML;
       // Making the country-info div visible
   document.getElementById('country-info').style.display = 'block';
}

function closeCountryInfo() {
        // Making the country-info div invisible
    document.getElementById('country-info').style.display = 'none';
}


</script>

</body>
</html>