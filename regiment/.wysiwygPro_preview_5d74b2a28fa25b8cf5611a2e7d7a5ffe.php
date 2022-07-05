<?php
if ($_GET['randomId'] != "8yxJB9Isf9UcpUqSw9qHKxdKgzanYDHHd9hsLC7bDX37j88PXyAgUDjTIU7QmKMH") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
