<?php
if ($_GET['randomId'] != "ne0QVl20GuMDncyIUCE0Kktdtt1JE8bnpazgR6Zfzhp_MSxXLotcQ6yCqZGmfyc0") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
