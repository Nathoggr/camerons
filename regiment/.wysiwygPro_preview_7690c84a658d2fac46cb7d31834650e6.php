<?php
if ($_GET['randomId'] != "N4_MqflwxFTOTZzDQAC3qTH_SFEbCGBbJRXSYK9QeVJRcB4edqmvAb8PR9pMLFcA") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
