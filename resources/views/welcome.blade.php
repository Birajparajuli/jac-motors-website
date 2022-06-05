<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/global.css">
    </head>
    <body class="antialiased">
        @include('components.nav')
        <header>
                <div class="header-img">
                    <img src="./assets/top-banner.jpg" alt="">
                </div>
               
        </header>
        <div class="container info-container">
             <h2>T8 PRO brings the full-range updating in style, comfort, stability, safety, and power, based on the eighth generation international platform.</h2>
        </div>
        <div class="container img-container">
            <video src="./assets/T8PRO.mp4" autoplay controls></video>
        </div>
        <div class="container img-continer">
                <img src="./assets/body-img-1.jpg" alt="">
        </div>
        <div class="container info-container">
             <h2>Aggressive And Muscular Front Grille | Design From Rome Shield</h2>
        </div>
        <div class="container img-continer">
                <img src="./assets/body-img-2.jpg" alt="">
        </div>
        <div class="container info-container">
             <h2>Streamlined Body | 18'' Double Color Aluminum Alloy Wheel Rim</h2>
        </div>

        <div class="container flex-container">
            <div class="img img-left">
                <img src="./assets/body-img-3.jpg" alt="">
                <h3>Auto Xenon Headlamps LED <br> Daytime Running Lamps</h3>
            </div>
            <div class="img img-right">
                <img src="./assets/body-img-4.jpg" alt="">
                <h3>Double C <br> LED Rear Combination Lamps</h3>
            </div>
        </div>
        <div class="container img-continer">
                <img src="./assets/body-img-5.jpg" alt="">
        </div>

        <div class="container info-container">
             <h2>Classic T-shaped Dashboard</h2>
             <h3>Leather Covering Interior, Chrome Decorative Line</h3>
             <h2>Leather Bound Multifunctional Steering Wheel</h2>
             <h3>Audio Control & Cruise Control & Bluetooth Phone</h3>
             <h2>Smart Entry And Start System</h2>
        </div>

        <div class="container img-continer">
                <img src="./assets/body-img-6.jpg" alt="">
                <h3>7'' Colour Multi Information Display</h3>
        </div>

        <!-- slider here -->
        <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    
    <img src="./assets/slider-img-1.jpg" style="width:100%">
    <div class="text">Air-conditioning Control & Reverse Camera</div>
  </div>

  <div class="mySlides fade">
    
    <img src="./assets/slider-img-2.jpg" style="width:100%">
    <div class="text">AM/FM Stereo Radio, Bluetooth and CarPlay / Android Auto Smartphone Connectivity</div>
  </div>

  <div class="mySlides fade">
    
    <img src="./assets/slider-img-3.jpg" style="width:100%">
    <div class="text">10.4'' Colour Touchscreen MP5</div>
  </div>

  <!-- Next and previous buttons -->
  <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!-- Slider finsished here -->


<div class="container flex-container">
            <div class="img img-left">
                <img src="./assets/body-img-3.jpg" alt="">
                <h3>Auto Xenon Headlamps LED <br> Daytime Running Lamps</h3>
            </div>
            <div class="img img-right">
                <img src="./assets/body-img-4.jpg" alt="">
                <h3>Double C <br> LED Rear Combination Lamps</h3>
            </div>
        </div>

        <div class="container flex-container">
            <div class="img img-left">
                <img src="./assets/body-img-3.jpg" alt="">
                <h3>Auto Xenon Headlamps LED <br> Daytime Running Lamps</h3>
            </div>
            <div class="img img-right">
                <img src="./assets/body-img-4.jpg" alt="">
                <h3>Double C <br> LED Rear Combination Lamps</h3>
            </div>
        </div>
       @include('components.footer')
        <script>
            // slider script starts here
            let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}



        </script>
    </body>
</html>
