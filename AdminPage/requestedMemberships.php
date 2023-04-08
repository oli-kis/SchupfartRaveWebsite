<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../index.html");
    exit;
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
    <link rel="stylesheet" href="../assets/css/style.css" />

    <title>Schupfart Rave Requested Memberships</title>
</head>


<body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="allusers.php" class="nav__logo">Schupfart Rave</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <!--<li class="nav__item">
                        <a href="#" class="nav__link">Soon</a>
                    </li>-->
                    <li class="nav__item">
                        <a href="requestedMemberships.php" class="nav__link">Requested Memberships</a>
                    </li>
                    <li class="nav__item">
                        <a href="userlogins.php" class="nav__link">Logins</a>
                    </li>
                    <li class="nav__item">
                        <a href="allusers.php" class="nav__link">All Users</a>
                    </li>
                    <li class="nav__item">
                        <!--========== Logout ==========-->
                        <a href="../Member.php" class="nav__link">Member-Area</a>
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
    <main class="l-main">
        <table class="table">
            <tr class="tr">
                <th class="th">Id</th>
                <th class="th">Vorname</th>
                <th class="th">Nachname</th>
                <th class="th">Email</th>
                <th class="th">Timestamp</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "u484802095_olivier", "[lODA1>p>IX0", "u484802095_users");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, vorname, nachname, email, datum FROM requestedMembership";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["vorname"] . "</td><td>" . $row["nachname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["datum"]
                        . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
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
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="../assets/js/main.js"></script>
</body>

</html>