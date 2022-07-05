<?php
if ($_GET['randomId'] != "pTghpxDphGAofbNx2KqJcCxfI0UdFepHuNpjk6rynt26meIA35ZfiSZKiOAfBxQZ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
