<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="assets/img/logo-schupfart.png" />
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/video-gallery-styles.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Schupfart Rave Member-Area</title>
</head>

<body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
    </a>
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="index.html" class="nav__logo">Schupfart Rave</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <!--<li class="nav__item">
                        <a href="#" class="nav__link">Soon</a>
                    </li>-->
                    <li class="nav__item">
                        <a href="Member.php" class="nav__link">Fotos</a>
                    </li>
                    <li class="nav__item">
                        <a href="video-gallery.html" class="nav__link">Videos</a>
                    </li>
                    <li class="nav__item">
                        <a href="MemberAdminLogin.php" class="nav__link">Admin Login</a>
                    </li>
                    <li class="nav__item">
                        <!--========== Logout ==========-->
                        <a href="logout.php" class="nav__link">Abmelden</a>
                    </li>
                    <li>
                        <i class="bx bx-toggle-left change-theme" id="theme-button"></i>
                    </li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
    </header>
    <!--========== Main ==========-->
    <div class="video-gallery">
        
         <div class="gallery-item ">
         <img src="assets/img/01.01.2023/silvester5.jpg" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>Aarau</h2>
              <p>Schupfart Raver</p>
            <!--</div>-->
            <a class="vimeo-popup" href="assets/videos/aarauHymne.mp4"></a>
          </div>
        </div>
        
        <div class="gallery-item ">
         <img src="assets/img/11.11.2022/lele-geburi3.jpeg" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>Mo Bamba</h2>
              <p>Sheck Wes</p>
            <!--</div>-->
            <a class="vimeo-popup" href="assets/videos/shekwes.mp4"></a>
          </div>
        </div>
    
        <div class="gallery-item">
          <img src="assets/img/video-thumbnails/holdMeNow1.png" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>Hold Me Now</h2>
              <p>-</p>
            <!--</div>-->
            <a class="vimeo-popup" href="assets/videos/ohmylove.mp4"></a>
          </div>
        </div>
        
        <div class="gallery-item">
         <img src="assets/img/video-thumbnails/houseofhouse1.png" class="north-cascades-img" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>The House of House</h2>
              <p>-</p>
            <!--</div>-->
            <a class="vimeo-popup" href="assets/videos/video1.mp4"></a>
          </div>
        </div>
        <div class="gallery-item">
          <img src="assets/img/video-thumbnails/holdMeNow2.png" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>Hold Me Now</h2>
              <p>-</p>
            <!--</div>-->
            <a class="popup-vimeo" href="assets/videos/video2.mp4"></a>
          </div>
        </div>
        <div class="gallery-item">
          <img src="assets/img/video-thumbnails/whatever1.png" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>Whatever</h2>
              <p>Cro</p>
            <!--</div>-->
            <a class="popup-vimeo" href="assets/videos/frei.mp4"></a>
          </div>
        </div>
        <div class="gallery-item">
          <img src="assets/img/video-thumbnails/scatman1.png" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>Scatman</h2>
              <p>-</p>
            <!--</div>-->
            <a class="popup-vimeo" href="assets/videos/scatman.mp4"></a>
          </div>
        </div>
        <div class="gallery-item">
          <img src="assets/img/video-thumbnails/sensation1.png" alt=""/>
          <div class="gallery-item-caption">
            <!--<div>-->
              <h2>Sensation</h2>
              <p>Restricted</p>
            <!--</div>-->
            <a class="popup-vimeo" href="assets/videos/video3.mp4"></a>
          </div>
        </div>
      </div>
   
    <!--========== Anmelden ==========-->
    <section class="send section">
        <div class="send__container bd-container bd-grid">
            <div class="send__content">
                <h2 class="section-title-center send__title">Jetzt anmelden</h2>
                <p class="send__description">Melde dich jetzt für den Newsletter an!</p>
                <form action="https://formspree.io/f/xzbwvlde" method="POST">
                    <div class="send__direction">
                        <input type="email" name="email" placeholder="E-Mail" class="send__input" />
                        <input type="submit" value="SENDEN" class="button" />
                    </div>
                </form>
            </div>

            <div class="send__img">
                <img src="assets/img/logo-schupfart.png" alt="">
            </div>
        </div>
    </section>

    <!--========== FOOTER ==========-->
    <footer class="footer section">
        <div class="footer__container bd-container bd-grid">
            <div class="footer__content">
                <h3 class="footer__title">
                    <a href="#" class="footer__logo">Schupfart Rave</a>
                </h3>
                <p class="footer__description">Schlafen gehen kannst du <br> wenn du tot bist</p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Unsere Party's</h3>
                <ul>
                    <li><a href="Member.php" class="footer__link">Galerie </a></li>
                    <li><a href="standorte.html" target="_blank" class="footer__link">Standort</a></li>
                    <li><a href="datum.html" class="footer__link">Countdown</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Unsere Unternehmung</h3>
                <ul>
                    <li><a href="impressum.html" class="footer__link">Impressum</a></li>
                    <li><a href="about-us.html" class="footer__link">About us</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Social Media</h3>
                <!--<a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>-->
                <a href="https://www.instagram.com/schupfart_rave/" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; 2021 Schupfart Rave. All right reserved</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
    <!--<script src="assets/js/video-gallery.js"></script>-->

    <script>
        $(function() {
            $('.popup-vimeo').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
        </script>
</body>

</html>