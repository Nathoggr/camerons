<?php
if ($_GET['randomId'] != "a3Lv41Oc7xqn0p2UwGJBlDD9fVULb97Q2V8Mn8rt1Vxz4UZmPQSbtDnkHchPkmhb") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
