<?php
if ($_GET['randomId'] != "F0s1P6SM5Y5yAFN7f8EdjFBwecsTvsWXjtdsNjArp3HaSR5_jYSiXP_7StELYBev") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
