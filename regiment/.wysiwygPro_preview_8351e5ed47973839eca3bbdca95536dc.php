<?php
if ($_GET['randomId'] != "3Qmya9_uI26D3sP6vcJ_fDNEcelY4bWcH6PS9SYaLejI4Mj8WBM2NvQ5zKCFt7J0") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
