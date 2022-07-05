<?php
if ($_GET['randomId'] != "ypFshsm9rBk8cUtHlickTfgdYFNI48SdJZfdp7w8elQ0Hy5xBLNMr9l9MF9l0Jri") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
