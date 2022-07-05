<?php
if ($_GET['randomId'] != "V0gX3u2JF0mT6s9hcL7VZJH8bzzKugTEheYxCoNhWsS25y7XeQLwjptrN2Nh5zD5") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
