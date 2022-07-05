<?php
if ($_GET['randomId'] != "Q9C07pkuz5FLbsGRxurPsDnWWhbFs_XhSiBle5uS5ymBdiwf0iaX2Xq_JX7IvFs7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
