<?php
if ($_GET['randomId'] != "NuAOA8_ZK3W4VjB48nbslO4fRZ5CeYxsaPuaIcZtdazQhNVewDHca86_bSAPu7gj") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
