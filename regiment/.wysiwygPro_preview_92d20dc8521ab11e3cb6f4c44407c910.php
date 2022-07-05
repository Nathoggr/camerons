<?php
if ($_GET['randomId'] != "uaJLTTimvVAakLDOjPJW7tCV4LIo15MIjgssFXcqMGUqmkZpAJ_3zsdzkVKkTKUl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
