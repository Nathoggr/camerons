<?php
if ($_GET['randomId'] != "oiSD6oDQY9NB0Zlvo20ZjnInkWcZG7vYIDo1gBVixOn_P1pfunsiOFR_P5Xks_OaZx3QzrnX4cdK9NK5OYS0RDyYfuW1zEO9vEhQsyDkToB3cWd1pS77jv9iyuMdsQCoWAl8wKqbkLjFsqvECWMzE5etYo2RL_CXmswA8aHYYKYdnKTib8ovqI980gRy78AsCtHgyZ2N9dG4hFFNMzI4OqomHGyyluwCEEbURYRHtPlpZRB0ebh9sIFe48jvchAm") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
