<?php
if ($_GET['randomId'] != "1XtnEKL8e8Mr6LCrU_TIfcH_m3pmDFa74JC7aGsI2OlJbIzGcn0BrEu_5pXFvnG4") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
