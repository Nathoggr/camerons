<?php
if ($_GET['randomId'] != "aaC41U6Z5jPH5k8erkdeInR1bsq3kkVpIvtvqJKb4oZd5LVHu6MqcpsPhJrUgVqy") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
