<?php
if ($_GET['randomId'] != "0PQMENem2u3haXV4Iml4CXF0X8Tj8r_KId70tenINsapto7og3yCr9X14lO8pT5p") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
