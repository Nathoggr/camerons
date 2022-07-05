<?php
if ($_GET['randomId'] != "fYSCNSBs1WACB6SEkGkYbrG1PSB3QiKhSX0mbOp1TLMZTF9opz5QiOhNWy1hIppy") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
