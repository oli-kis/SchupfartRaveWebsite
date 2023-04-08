<?php
require("./assets/php/connection.php");

if (isset($_POST["submit"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $con->prepare("SELECT * FROM admin WHERE username=:username");
  $stmt->bindParam(":username", $username);
  $stmt->execute();
  $userExists = $stmt->fetchAll();

  $passwordHashed = $userExists[0]["password"];
  $checkPassword = password_verify($password, $passwordHashed);

  if ($checkPassword === false) {
echo "Passwort Falsch";
  }
  if ($checkPassword === true) {
    header("Location: /AdminPage/allusers.php");
  }
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

    <title>Schupfart Rave Login</title>
</head>

<body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="Member.php" class="nav__logo">Schupfart Rave</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <!--<li class="nav__item">
                        <a href="#" class="nav__link">Soon</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Soon</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Soon</a>
                    </li>-->
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

    <main class="login-main">
        <!--========== HOME ==========-->
        <div class="center">
            <h1>Admin Login</h1>
            <form name="login" id="login-form" action="MemberAdminLogin.php" method="POST">
                <div class="txt_field">
                    <input type="text" name="username" required />
                    <span></span>
                    <label>Benutzername</label>
                </div>
                <div class="txt_field">
                    <input type="password" id="password-check-login" name="password" required />
                    <span></span>
                    <label>Passwort</label>
                </div>
                <input type="submit" name="submit" value="Login" />
                <div class="signup_link">
                    <!--No kei Member? <a href="registrieren.html">Registriere</a>    onclick="checkPassword()"-->
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