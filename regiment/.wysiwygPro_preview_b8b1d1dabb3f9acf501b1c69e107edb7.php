<?php
if ($_GET['randomId'] != "q4iPwe0aefxOMR09_HH4HZvAGmaphfUjB3Dml2xcGEdtm8H8LPm0e0HWL7Gctu8R") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
