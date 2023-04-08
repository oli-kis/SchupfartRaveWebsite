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
                        <a href="video-gallery.php" class="nav__link">Videos</a>
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

    <!--========== HEADER ==========-->
    <header class="member-header" id="header">
        <div class="member-text">Willkomme im Member Bereich
        </div>
        <div class="member-name">
            <?php
            echo $_SESSION["username"];

            ?>
        </div>
        <div class="foto-filter">
            <button class="button" id="filterAll">Alle</button>
            <button class="button" id="filterGarage">Garage</button>
            <button class="button" id="filterSchupfart">Schupfart</button>
            <button class="button" id="filterAndere">Andere</button>
            <a href="video-gallery.php"><button class="button">Videos</button></a>
        </div>
    </header>

    <!--========== Photo Galerie ==========-->
    <div class="photo__gallery" id="foto">
        
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
    </main>

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
    <script src="assets/js/fotos.js"></script>
</body>

</html>