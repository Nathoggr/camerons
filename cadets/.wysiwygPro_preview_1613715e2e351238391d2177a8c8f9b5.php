<?php
if ($_GET['randomId'] != "KVwrb9dqlnEwolb1OxC1OAW87CZnJ8BcUlcCJJMjrCh5I2ckNIRsD0eQUbPNPtnE") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
