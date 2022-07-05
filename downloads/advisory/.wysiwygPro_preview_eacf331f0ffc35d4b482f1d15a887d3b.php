<?php
if ($_GET['randomId'] != "fyGnaim74Sab4U2FR7pPh9lUrMC7UdBJ0fDbyWo7yIjvjKEOYkjkQyKXFPYSs5nk") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
