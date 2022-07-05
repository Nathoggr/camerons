<?php
if ($_GET['randomId'] != "vbWMmg8knS6XwpHt5VyoZrKmnga9bJkwX8bREDhdoWRDqyLBECQMWjLXx7vIFEAI") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
