<?php
if ($_GET['randomId'] != "OLTBr3kCgBgk64RhBZTl7D5hbkoCErI_KrPjP9UZSJHwAuhIYO42BXiyaEhIXxFS") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
