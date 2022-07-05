<?php
if ($_GET['randomId'] != "GQtFpyEnuwefLQ3NHfboPqIIcTZbVLbznXYAB40yZzP9vuLM3uDyPveyglz3bmDP") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
