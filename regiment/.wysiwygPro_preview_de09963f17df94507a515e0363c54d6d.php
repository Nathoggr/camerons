<?php
if ($_GET['randomId'] != "dwhb4HVZ4KfQgFLRoS43iot2IzbbAkP7UoUNWjXGItEtHhdfFJv7_vTm3a13nDXi") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
