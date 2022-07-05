<?php
if ($_GET['randomId'] != "AwW22tiVUPpdONu763xfHHJ4hq5eLITM6eVrJKRSaz70z8oSkhmR4lORfw9v8Ryw") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
