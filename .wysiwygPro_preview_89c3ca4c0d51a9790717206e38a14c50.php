<?php
if ($_GET['randomId'] != "iPXehDEHHOPOmThl_s83NBWfKlbRSALXSnbaw_svQt64MNiFjEFPvN7_C50WulgV") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
