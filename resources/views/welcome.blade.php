<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="./css/global.css" />
    </head>
    <body class="antialiased">
        @include('components.nav')
        <header>
            <div class="header-img">
                <img src="./assets/top-banner.jpg" alt="" />
            </div>
        </header>
        <div class="container info-container">
            <h2>
                T8 PRO brings the full-range updating in style, comfort,
                stability, safety, and power, based on the eighth generation
                international platform.
            </h2>
        </div>
        <div class="container img-container">
            <video src="./assets/T8PRO.mp4" autoplay controls></video>
        </div>
        <div class="container img-continer">
            <img src="./assets/body-img-1.jpg" alt="" />
        </div>
        <div class="container info-container">
            <h2>
                Aggressive And Muscular Front Grille | Design From Rome Shield
            </h2>
        </div>
        <div class="container img-continer">
            <img src="./assets/body-img-2.jpg" alt="" />
        </div>
        <div class="container info-container">
            <h2>
                Streamlined Body | 18'' Double Color Aluminum Alloy Wheel Rim
            </h2>
        </div>

        <div class="container flex-container">
          <div class="home-info-img">
              <div class="zoom-img">
                  <img src="./assets/body-img-3.jpg" alt="" />
              </div>
              <p>
                  Auto Xenon Headlamps LED <br />
                  Daytime Running Lamps
              </p>
          </div>
          <div class="home-info-img">
              <div class="zoom-img">
                  <img src="./assets/body-img-4.jpg" alt="" />
              </div>
              <p>
                  Double C <br />
                  LED Rear Combination Lamps
              </p>
          </div>
      </div>
        <div class="container img-continer">
            <img src="./assets/body-img-5.jpg" alt="" />
        </div>

        <div class="container info-container">
            <h2>Classic T-shaped Dashboard</h2>
            <h3>Leather Covering Interior, Chrome Decorative Line</h3>
            <h2>Leather Bound Multifunctional Steering Wheel</h2>
            <h3>Audio Control & Cruise Control & Bluetooth Phone</h3>
            <h2>Smart Entry And Start System</h2>
        </div>

        <div class="container img-continer">
            <img src="./assets/body-img-6.jpg" alt="" />
            <h3>7'' Colour Multi Information Display</h3>
        </div>

        <!-- slider here -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="./assets/slider-img-1.jpg" style="width: 100%" />
                <div class="text">
                    Air-conditioning Control & Reverse Camera
                </div>
            </div>

            <div class="mySlides fade">
                <img src="./assets/slider-img-2.jpg" style="width: 100%" />
                <div class="text">
                    AM/FM Stereo Radio, Bluetooth and CarPlay / Android Auto
                    Smartphone Connectivity
                </div>
            </div>

            <div class="mySlides fade">
                <img src="./assets/slider-img-3.jpg" style="width: 100%" />
                <div class="text">10.4'' Colour Touchscreen MP5</div>
            </div>

            <!-- Next and previous buttons -->
            <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
        </div>
        <br />

        <!-- The dots/circles -->
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <!-- Slider finsished here -->

        <div class="container flex-container">
            <div class="home-info-img">
                <div class="zoom-img">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/9@2x.c5133aa.jpg" alt="" />
                </div>
                <p>
                  EPB(Electrical Park Brake) & Auto Hold
                </p>
            </div>
            <div class="home-info-img">
                <div class="zoom-img">
                    <img src="https://jacen.jac.com.cn/_nuxt/img/10@2x.19ab609.jpg" alt="" />
                </div>
                <p>
                  12 Volt Power Socket & USB Input
                </p>
            </div>
        </div>
        <div class="container flex-container">
          <div class="home-info-img">
              <div class="zoom-img">
                  <img src="https://jacen.jac.com.cn/_nuxt/img/11@2x.d0a7024.jpg" alt="" />
              </div>
              <p>
                Premium Leather Seat
              </p>
          </div>
          <div class="home-info-img">
              <div class="zoom-img">
                  <img src="https://jacen.jac.com.cn/_nuxt/img/12@2x.0e371e7.jpg" alt="" />
              </div>
              <p>
                Rear Air Vents & USB Input <br>
Child Restraint System (ISOFIX) & Rear Armrest With <br>

2 Cupholders
              </p>
          </div>
      </div>

        <div class="container img-continer">
            <img
                src="https://jacen.jac.com.cn/_nuxt/img/13@2x.ba8a7bc.jpg"
                alt=""
            />
            <p class="p-margin">
                "Birdcage" Frame Structure + High-strength Steel Proportion <br>
                Reaches 43% Double Side Door Impact Beams Design For ECE R29 <br>
                Collision Regulations
            </p>
        </div>
        <div class="container img-continer">
            <img
                src="https://jacen.jac.com.cn/_nuxt/img/14@2x.c822f7f.jpg"
                alt=""
            />
            <p class="p-margin">
              Min. Ground Clearance 220mm and Max. Wading Depth 1.2m
        </div>

        <div class="container flex-container">
          <div class="home-flex-left zoom-img">
            <img src="https://jacen.jac.com.cn/_nuxt/img/15@2x.0412ee9.jpg" alt="">
          </div>
          <div class="home-flex-right">
            <div class="zoom-img">
              <img src="https://jacen.jac.com.cn/_nuxt/img/16@2x.120068d.jpg" alt="">
            </div>
            
            <div class="zoom-img">
              <img src="https://jacen.jac.com.cn/_nuxt/img/17@2x.968559d.jpg" alt="">
            </div>
          </div>
        </div>

        <div class="container info-container">
          <p class="p-margin">
            Driver And Front Passenger SRS Airbags <br>
            Front And Rear Disc Brakes <br>
            
            Bosch 9.3 ESP System : ABS EBD TCS VDC HBA HAC <br>
          </p>
        </div>

        <div class="container img-continer">
          <img
              src="https://jacen.jac.com.cn/_nuxt/img/20@2x.22e043e.jpg"
              alt=""
          />
          <p class="p-margin">
            Front And Rear Parking Sensors & HD 360° Camera
      </div>
        <div class="container img-continer">
          <img
              src="https://jacen.jac.com.cn/_nuxt/img/18@2x.63ca34c.jpg"
              alt=""
          />
          <p class="p-margin">
            Tyre Pressure Monitoring System (TPMS)
      </div>
      <div class="container bg-img-text">
        <div class="bg-img-home">
          <img src="https://jacen.jac.com.cn/_nuxt/img/19@2x.de652e8.jpg" alt="">
        </div>
      </div>

      <div class="container img-container">
        <div class="spec-title">
          <img src="./assets/params.webp" alt="">
          <h2>Specification</h2>
        </div>
        <img src="./assets/table-spec.png" alt="">
      </div>

        @include('components.footer')
        <script>
            // slider script starts here
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides((slideIndex += n));
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides((slideIndex = n));
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(
                        " active",
                        ""
                    );
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </body>
</html>
