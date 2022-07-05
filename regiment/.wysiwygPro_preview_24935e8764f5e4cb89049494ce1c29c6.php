<?php
if ($_GET['randomId'] != "tIzko5esbWOT7M94ZLNk9c2Cx3PYN7Vx33nIVEKRw4zbA01ZMRSw0VCJOeJGj3TR") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
