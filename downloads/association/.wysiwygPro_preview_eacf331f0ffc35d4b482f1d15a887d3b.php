<?php
if ($_GET['randomId'] != "_n4JpTQ6IQzdakNZVQTfZjjzILBvlteWE0up2_IoEBI1ubtKXHnOCgtH6Hb73pl1") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
