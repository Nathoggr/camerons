<?php
if ($_GET['randomId'] != "vWVs9QCOIX6mCscIuloUiKXk3k2JEcXg1a9ZQwHJC89OT3DdhpOGWW3CxlWXZLJC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
