<?php
if ($_GET['randomId'] != "iFrK75DxXUiZhVzVNBIIYfAxAE6iIZjkjSJhlgbXx8OjfktER6Ixdzr2OfVxIL8Q") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
