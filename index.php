<?php include('inc/header.php') ?>

<div class="slide-container" id="slide-container">
        <div class="slider-btn slider-btn-next btn-hidden" id="slider-btn-prev">
            <svg class="svg" version="1.1" xmlns="http://www.w3.org/1999/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                <g>
                  <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
                </g>
              </svg>              
        </div>
        <div class="slider-btn slider-btn-prev btn-hidden" id="slider-btn-next"><svg class="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
            <g>
              <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
            </g>
          </svg>
          </div>
        <div class="slide-img slide-offscreen-right" id="img1"><img src="./img/1.png" alt=""></div>
        <div class="slide-item slide-text-hidden" id="txt1"><h1>Vertices</h1></div>
        <div class="slide-item slide-icon slide-icon-hidden" id="icon1">
            <a href="https://www.youtube.com/channel/UCjqYIEahx0tFxwrJgtGBxQw/featured" target="_blank">
            <img src="./img/youtube.png" alt=""></a></div>
        <div class="slide-img slide-offscreen-right" id="img2"><img src="./img/2.png" alt=""></div>
        <div class="slide-item slide-text-hidden" id="txt2"><h1>3D Models</h1></div>
        <div class="slide-item slide-icon slide-icon-hidden" id="icon2">
            <a href="https://www.twitch.tv/verttttices" target="_blank">
            <img src="./img/twitch.jpg" alt=""></a></div>
        <div class="slide-img slide-offscreen-right" id="img3"><img src="./img/3.jpg" alt=""></div>
        <div class="slide-item slide-text-hidden" id="txt3"><h1>Racing Game</h1></div>
        <div class="slide-item slide-icon slide-icon-hidden" id="icon3">
            <a href="#" target="_blank">
            <img src="./img/instaFull.jpg" alt=""></a></div>

        <div id="slide-tab-holder"></div>
    </div>

    <main>
        <section id="about">
        <header id="about-header"><h1>ABOUT</h1></header>
        <div class="flex-container" id="about-text">
            <div class="about-text-section" id="about-text-vert">
                <h3 class="sub-header">VERTICES</h3>
                <div><p>
                Vert's job is to design and create content for our movies and games. All our virtual worlds are carefully crafted by Vert with love and care.
                </p></div>
            </div>
            <div class="about-text-section" id="about-text-maliu">
                <h3 class="sub-header">MALIU</h3>
                <div><p>
                Maliu is the programmer. They need a description for this info text. As soon as they submit me one I'll insert it in this section right here, right here this section.
                </p></div>        
            </div>
        </div>
        </section>

        <section id="projects">
        <header id="projects-header"><h1>PROJECTS</h1></header>
            <h3 class="sub-header">Low Poly Racer</h3>
            <div class="flex-container">
            <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
            </div>
        </section>
    </main>
<script src="./js/touchEvents.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/index.js"></script>
<?php include('inc/footer.php') ?>