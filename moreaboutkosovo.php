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
    <title>More about Kosovo</title>
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
<div class="card-container">
    <div class="card" >
        <img src="pixtures/cardpixprishtina.jpg">
        <div class="card-content">
            <h3>Prishtina</h3>
            <p>Prishtina, Kosovo's vibrant capital, merges history and modernity in its lively streets and diverse culture.</p>
        </div>
    </div>

    <div class="card" >
        <img src="pixtures/cardpixprizren.jpg">
        <div class="card-content">
            <h3>Prizren</h3>
            <p>Prizren, a jewel landscape, captivates with its ancient charm and scenic beauty, historical wonders meet tranquil riverbanks.</p>
        </div>
    </div>

    <div class="card" >
        <img src="pixtures/cardpixpeja.jpg">
        <div class="card-content">
            <h3>Peja</h3>
            <p>Peja, nestled amidst Kosovo's majestic mountains, mesmerizes with its natural splendor and rich heritage.</p>
        </div>
    </div>

    <div class="card" >
        <img src="pixtures/cardpixrugova.jpg">
        <div class="card-content">
            <h3>Rugove</h3>
            <p>Rugova offers an enchanting retreat for nature enthusiasts and adventurers alike, nestled in Kosovo's picturesque landscapes.</p>
        </div>
    </div>

    <div class="card" >
        <img src="pixtures/driniibardhe.jpg">
        <div class="card-content">
            <h3>Drini i bardhe</h3>
            <p>Drini i Bardhë, or the White Drin, is a scenic river in Kosovo, cherished for its beauty and cultural significance.</p>
        </div>
    </div>

    <div class="card" >
        <img src="pixtures/maletesharrit.jpg">
        <div class="card-content">
            <h3>Sharr mountains</h3>
            <p>The Sharr mountains are a breathtaking natural wonder known for their rugged beauty and diverse ecosystems.</p>
        </div>
    </div>

    <div class="card" >
        <img src="pixtures/gjakova.jpg">
        <div class="card-content">
            <h3>Gjakova</h3>
            <p>Gjakova boasts a rich tapestry of architectural wonders, including Ottoman-era mosques, traditional bazaars, and centuries-old bridges.</p>
        </div>
    </div>

    <div class="card" >
        <img src="pixtures/gjilan.jpg">
        <div class="card-content">
            <h3>Gjilan</h3>
            <p>Moreover, Gjilan is a melting pot of cultures, with influences from various ethnicities and backgrounds shaping its unique identity.</p>
        </div>
    </div>
</div>

<!--SLIDER PART -->
<div class="container">
  <div class="slider">
   <img class="active" src="pixtures/slider2.jpg">
    <img src="pixtures/slider5.jpg">
    <img src="pixtures/slider4.jpg">
    <img src="pixtures/rugovee.jpg">
    <img src="pixtures/drini.jpg">
    <img src="pixtures/slider8.jpg">
    <img src="pixtures/slider9.jpg">
  </div>
  <nav class="slider-nav">
    <ul>
      <li class="arrow">
        <button class="previous">
        <span>&#9664;</span> 
        </button>
      </li>
      <li class="arrow">
        <button class="next">
        <span>&#9654;</span> 
        </button>
      </li>
    </ul>
  </nav>
</div>

<div id="country-info">
    <div class="close-btn-container">
        <span id="close-btn" onclick="closeCountryInfo()">Close</span>
    </div>
</div>

<script>
// JavaScript function to show and close country info 
function showCountryInfo(country, info) {
    // Creating HTML content for country information
    var infoHTML = "<h3>" + country + "</h3>";  // Creating HTML content for country information
    infoHTML += "<p>" + info + "</p>";  // Adding country information as paragraph
     // Adding close button for box
    infoHTML += '<div class="close-btn-container"><span id="close-btn" onclick="closeCountryInfo()">Close</span></div>'; 
// google maps urls
    var googleMapsUrls = {
    'Prishtina': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.8141301456987!2d21.15882381551881!3d42.66225297916906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537a2738ed58c1%3A0x400f842646b930!2sPrishtina!5e0!3m2!1sen!2s!4v1649174463143!5m2!1sen!2s',
    'Prizren': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14998.877083466406!2d20.738298165086787!3d42.21019058385855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13535808288b8587%3A0x60062c20bc6f850!2sPrizren!5e0!3m2!1sen!2s!4v1649174507862!5m2!1sen!2s',
    'Peja': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15006.936426152732!2d20.28864691562551!3d42.66064787828543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135357deb2a11a49%3A0x5ea3286a0a6ef0b2!2sPeja!5e0!3m2!1sen!2s!4v1649174571331!5m2!1sen!2s',
    'Rugove': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11907.535736566275!2d20.27716802804508!3d42.6612974895864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537c6d78d9f8e9%3A0x11da349eb241912e!2sRugova!5e0!3m2!1sen!2s!4v1649174777738!5m2!1sen!2s',
    'Drini i bardhe': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15106.97825547813!2d20.84244900878691!3d41.77719206327409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1352d8695ba8e4d7%3A0xb7faeaae6484a12d!2sWhite%20Drin!5e0!3m2!1sen!2s!4v1649176422301!5m2!1sen!2s',
    'Sharr mountains': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14347.690476481674!2d20.759248086130314!3d42.25374598155544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13554b694f1eaf49%3A0x34d6e8e18365ed52!2sSharr%20Mountains!5e0!3m2!1sen!2s!4v1649175077261!5m2!1sen!2s',
    'Gjakova': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11613.364694717395!2d20.426509028116888!3d42.38069831221262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354ccce9c23f669%3A0xf9f55d08ad0626!2sGjakova!5e0!3m2!1sen!2s!4v1649175193199!5m2!1sen!2s'


};

    // Get the Google Maps URL for the current city
    var googleMapsUrl = googleMapsUrls[country];

    // Adding an iframe with a Google Maps embed for the country location
    infoHTML += '<iframe width="560" height="315" src="' + googleMapsUrl + '" frameborder="0" style="border:0;" allowfullscreen></iframe>';
    
    // Setting the content to the country-info 
    document.getElementById('country-info').innerHTML = infoHTML;
    
    // Making the country-info div visible
    document.getElementById('country-info').style.display = 'block';
}


function closeCountryInfo() {
        // Making the country-info div invisible
    document.getElementById('country-info').style.display = 'none';
}

///// SLIDER js code
const items = document.querySelectorAll('.slider img'); // Selecting all images within the slider
const itemCount = items.length;
const nextItem = document.querySelector('.slider-nav .next'); // Selecting the next button within slider-nav
const previousItem = document.querySelector('.slider-nav .previous'); // Selecting the previous button within slider-nav
let count = 0;

function showNextItem() {
  items[count].classList.remove('active');

  if(count < itemCount - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add('active');
  console.log(count);
}

function showPreviousItem() {
  items[count].classList.remove('active');

  if(count > 0) {
    count--;
  } else {
    count = itemCount - 1;
  }

  items[count].classList.add('active');
  console.log(count);
}

function keyPress(e) {
  e = e || window.event;
  
  if (e.keyCode == '37') {
    showPreviousItem();
  } else if (e.keyCode == '39') {
    showNextItem();
  }
}

nextItem.addEventListener('click', showNextItem);
previousItem.addEventListener('click', showPreviousItem);
document.addEventListener('keydown', keyPress);

// show contry info when the specific pix is clicked on the slider!
items[0].addEventListener('click', function() {
  showCountryInfo('Prizren', 'Visit the historic Prizren Castle, perched on a hill overlooking the city, and admire panoramic views of the Old Town and surrounding mountains.', true);
});

items[1].addEventListener('click', function() {
  showCountryInfo('Peja', 'Don\'t miss the Rugova Gorge, a breathtaking natural wonder just a short drive from the city center, offering hiking trails and stunning scenery.', true);
});

items[2].addEventListener('click', function() {
  showCountryInfo('Prishtina', 'Explore the vibrant café culture of Prishtina, where you can enjoy a traditional macchiato while soaking in the city\'s lively atmosphere and street art.', true);
});

items[3].addEventListener('click', function() {
  showCountryInfo('Rugove', 'Explore the pristine beauty of Rugova Valley, where you can hike along the scenic trails, visit the iconic Rugova Canyon, and enjoy outdoor activities such as rock climbing and zip-lining.', true);
});

items[4].addEventListener('click', function() {
  showCountryInfo('Drini i bardhe', 'Embark on a tranquil boat ride along the White Drin River, where you can admire the stunning scenery of lush greenery and crystal-clear waters, and discover hidden caves and waterfalls.', true);
});

items[5].addEventListener('click', function() {
  showCountryInfo('Sharr mountains', 'Embark on an unforgettable adventure in the Sharr Mountains, where you can hike through pristine forests, discover hidden waterfalls, and enjoy panoramic views of the surrounding landscapes.', true);
});
items[6].addEventListener('click', function() {
  showCountryInfo('Gjakova', 'Explore the rich architectural heritage of Gjakova, where you can stroll through cobblestone streets, visit Ottoman-era mosques, and admire traditional bazaars and centuries-old bridges.', true);
});

</script>
</body>
</html>