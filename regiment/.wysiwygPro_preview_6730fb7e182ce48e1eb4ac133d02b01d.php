<?php
if ($_GET['randomId'] != "9DfbCXvjBGSAXmEgdIUEkchKgZ7iyfBd6SKoegNOLFseKxBOWww4RTJRgn0_T1zb") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
