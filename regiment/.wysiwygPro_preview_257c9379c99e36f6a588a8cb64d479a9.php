<?php
if ($_GET['randomId'] != "GUw5AfuWcMbeLwmRbMGtr7ZK17IQmJOQgewa5gyN5IctVMC_fDcz6JWQwKjB_HU2") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
