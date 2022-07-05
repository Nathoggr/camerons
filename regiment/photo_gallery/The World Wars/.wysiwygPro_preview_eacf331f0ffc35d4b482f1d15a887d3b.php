<?php
if ($_GET['randomId'] != "GBAZM9DZ4jI9PqkqXJwsFKdEO68nia1SjPUrq92Ew9ph1FEzI3M4eadqu7lMGuos") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
