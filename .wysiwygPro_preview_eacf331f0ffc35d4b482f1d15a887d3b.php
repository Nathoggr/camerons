<?php
if ($_GET['randomId'] != "V2DkQah3wdiMKRUQb6K3RSYMLeIhtsQkusKKOKu5JjEL7dbJQ7hRLegJZfj1q4pz") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
