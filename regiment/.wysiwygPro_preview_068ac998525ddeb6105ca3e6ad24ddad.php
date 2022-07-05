<?php
if ($_GET['randomId'] != "rQcxKTI0voJE0QNsNejbPBeUa1ZIiV6aZI5W86E4uwQs3lyRolpElOAlUn_nrZvo") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
