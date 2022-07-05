<?php
if ($_GET['randomId'] != "DBieMiYlkgn3352wKFOcc8qmkzISvEho3wjQDxFiQ7vLPqZdTbnY6NkwI8xBf5ia") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
