<?php
if ($_GET['randomId'] != "IOtGbFSWGnFgGduTQxfGdz4G5rRnXiFQTANBOmSkXXhXzWGa_SaGPMNWScS9aslP") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
