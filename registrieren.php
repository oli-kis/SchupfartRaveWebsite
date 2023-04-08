<?php
error_reporting(E_ALL ^ E_NOTICE);  
require("assets/php/connection.php");

if (isset($_POST["submit"])) {

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);

$stmt = $con->prepare("SELECT * FROM allowedUsers WHERE Email=?");
$stmt->execute([$email]); 
$user = $stmt->fetch();

  if ($user) {
    $stmt = $con->prepare("SELECT * FROM users WHERE username=:username OR email=:email");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $userAlreadyExists = $stmt->fetchColumn();

    if (!$userAlreadyExists) {
      //Registrieren
      registerUser($username, $email, $password);
    } else {
      //User existiert bereits
      $message = "Sorry de User existiert scho";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
  } else{
      $message = "Sorry du bisch nonig vo eus verifiziert wurde";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
}

function registerUser($username, $email, $password)
{
  global $con;
  $stmt = $con->prepare("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":password", $password);
  $stmt->execute();
  header("Location: anmelden.php");
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
      <h1>Registriere</h1>
      <form action="registrieren.php" method="POST" name="Registrieren">
        <div class="txt_field">
          <input type="text" name="username" maxlength="20" required />
          <span></span>
          <label>Benutzername</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" maxlength="35" required />
          <span></span>
          <label>E-Mail</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" maxlength="20" required />
          <span></span>
          <label>Passwort</label>
        </div>
        <input type="submit" name="submit" value="Registriere" />
        <div class="signup_link">
          Do chasch dis Benutzerkonto erstelle <br />
          und nocher chasch du dich öber s<br />
          Member Login Ahmälde
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