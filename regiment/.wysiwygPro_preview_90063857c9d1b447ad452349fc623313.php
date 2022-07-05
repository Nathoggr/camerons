<?php
if ($_GET['randomId'] != "2mQCRE9kElDCy_fIaqbqRK1fuFISzuPnGxgnc_VV2tA8xn3nHa4t3lzmAZxfCwIJ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
