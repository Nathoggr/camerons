<?php
if ($_GET['randomId'] != "VW7w8iBByQcRJKRss8XpKiKoANC6YiIzx_shG1Lz72mZfCPRhSEEtvZJtljdEBli") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
