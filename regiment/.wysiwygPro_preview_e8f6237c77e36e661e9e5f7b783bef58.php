<?php
if ($_GET['randomId'] != "cApT7G_qVA1FgVkZZHoKlYZqgNItqNjK9_d4KNHZeWp1ms7_yY8o0fPe7ViRqdip") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
