<?php
error_reporting(E_ALL ^ E_NOTICE);  
require("assets/php/connection.php");

if (isset($_POST["submit"])) {

    $vorname = $_POST["Vorname"];
    $nachname = $_POST["Nachname"];
    $email = $_POST["Email"];

    date_default_timezone_set("Europe/Zurich");
    $date = date("Y-m-d H:i:sa");

    registerUser($vorname, $nachname, $email, $date);
}

function registerUser($vorname, $nachname, $email, $date)
{
    global $con;
    $stmt = $con->prepare("INSERT INTO requestedMembership(vorname, nachname, email, datum) VALUES(:username, :nachname, :email, :datum)");
    $stmt->bindParam(":username", $vorname);
    $stmt->bindParam(":nachname", $nachname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":datum", $date);
    $stmt->execute();
    header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--========== BOX ICONS ==========-->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/logo-schupfart.png" />
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Schupfart Rave Registrierung</title>
</head>

<body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="index.html" class="nav__logo">Schupfart Rave</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="standorte.html" class="nav__link">Standorte</a>
                    </li>
                    <li class="nav__item">
                        <a href="about-us.html" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="rave-stuff.html" class="nav__link">Ghits bi eus</a>
                    </li>
                    <li class="nav__item">
                        <a href="datum.html" class="nav__link">Countdown</a>
                    </li>
                    <li class="nav__item">
                        <a href="anmelden.php" class="nav__link">Member Login</a>
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

    <main class="login-main">
        <!--========== HOME ==========-->
        <div class="center">
            <h1>Mitgliedschaft beantragen</h1>
            <form action="vorregistrierung.php" method="POST">
                <div class="txt_field">
                    <input type="text" name="Vorname" maxlength="20" required />
                    <span></span>
                    <label>Vorname</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="Nachname" maxlength="20" required />
                    <span></span>
                    <label>Nachname</label>
                </div>
                <div class="txt_field">
                    <input type="email" name="Email" maxlength="35" required />
                    <span></span>
                    <label>E-Mail</label>
                </div>
                <input type="submit" name="submit" value="Beantragen" />
                <div class="signup_link">
                    Wenn mit dinne Date alles i.O. isch <br />
                    schicke mer dir per Mail de Link zu eusere <br />
                    Whatsapp-Gruppe und de Link zum dich för de <br />
                    Member-Bereich z registriere. <br />
                    Bis den chasch jo mol uf eusem
                    <a target="_blank" href="https://www.instagram.com/schupfart_rave/">
                        Insta</a>
                    <br />
                    verbiluege. <br />
                    Scho Member? <a href="anmelden.php">Anmelden</a>
                </div>
            </form>
        </div>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section">
        <div class="footer__container bd-container bd-grid">
            <div class="footer__content">
                <h3 class="footer__title">
                    <a href="#" class="footer__logo">Schupfart Rave</a>
                </h3>
                <p class="footer__description">
                    Wasser macht weise, lustig der Wein. <br />
                    Drum trinken wir beides, um beides zu sein.
                </p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Unsere Party's</h3>
                <ul>
                    <li><a href="anmelden.php" class="footer__link">Galerie </a></li>
                    <li>
                        <a href="standorte.html" class="footer__link">Standort</a>
                    </li>
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
                <a href="https://www.instagram.com/schupfart_rave/" class="footer__social"><i class="bx bxl-instagram-alt"></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; 2021 Schupfart Rave. All right reserved</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>

</html>