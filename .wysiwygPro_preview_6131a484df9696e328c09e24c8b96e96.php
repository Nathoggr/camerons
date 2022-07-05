<?php
if ($_GET['randomId'] != "aXGUbFU_5HyKJAwBI7xZm9UjNC48VCA53uFkGPKNLwNQ18KTrDxGo8CTsF1WRRFn0bX9Rk2z2DwZTTz0klXUWDjAaRhcG5nwtbXseIH_SrbwpkUhVTL2p8y9RkCoUsvC7l2l2abnbLalw6uqszDIEZ5WxecCOjJzGZlR1NIRQKQREM5hzf4Qe1LswmpVidgCYojLAk1NACqDQ7DXcSeGb1lMwqImJ1hGkDVr9VwPZRnLH2ni0KAeN5pV3ubNDjBz") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
