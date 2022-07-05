<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "oiSD6oDQY9NB0Zlvo20ZjnInkWcZG7vYIDo1gBVixOn_P1pfunsiOFR_P5Xks_OaZx3QzrnX4cdK9NK5OYS0RDyYfuW1zEO9vEhQsyDkToB3cWd1pS77jv9iyuMdsQCoWAl8wKqbkLjFsqvECWMzE5etYo2RL_CXmswA8aHYYKYdnKTib8ovqI980gRy78AsCtHgyZ2N9dG4hFFNMzI4OqomHGyyluwCEEbURYRHtPlpZRB0ebh9sIFe48jvchAm") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing index.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://thequeensowncameronhighlandersofcanada.net:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://thequeensowncameronhighlandersofcanada.net/regiment/photo_gallery/Trg/Bloody Claymore I  29 Sep-01 Oct 00/">
    <input type="hidden" name="basedir" value="/home/wxgkujqw/public_html/">
    <input type="hidden" name="udir" value="/home/wxgkujqw/public_html/regiment/photo_gallery/Trg/Bloody Claymore I  29 Sep-01 Oct 00">
    <input type="hidden" name="ufile" value="index.html">
    <input type="hidden" name="dir" value="%2fhome%2fwxgkujqw%2fpublic_html%2fregiment%2fphoto_gallery%2fTrg%2fBloody%20Claymore%20I%20%2029%20Sep-01%20Oct%2000">
    <input type="hidden" name="file" value="index.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://thequeensowncameronhighlandersofcanada.net:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://thequeensowncameronhighlandersofcanada.net/regiment/photo_gallery/Trg/Bloody Claymore I  29 Sep-01 Oct 00/">
    <input type="hidden" name="basedir" value="/home/wxgkujqw/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fwxgkujqw%2fpublic_html%2fregiment%2fphoto_gallery%2fTrg%2fBloody%20Claymore%20I%20%2029%20Sep-01%20Oct%2000">
        <input type="hidden" name="file" value="index.html">
    <input type="hidden" name="udir" value="/home/wxgkujqw/public_html/regiment/photo_gallery/Trg/Bloody Claymore I  29 Sep-01 Oct 00">
    <input type="hidden" name="ufile" value="index.html">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$editor->baseURL = "http://thequeensowncameronhighlandersofcanada.net/regiment/photo_gallery/Trg/Bloody Claymore I  29 Sep-01 Oct 00/";

$editor->loadValueFromFile('/home/wxgkujqw/public_html/regiment/photo_gallery/Trg/Bloody Claymore I  29 Sep-01 Oct 00/index.html');

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home/wxgkujqw/public_html/';
$editor->mediaURL = 'http://thequeensowncameronhighlandersofcanada.net/';
$editor->imageDir = '/home/wxgkujqw/public_html/';
$editor->imageURL = 'http://thequeensowncameronhighlandersofcanada.net/';
$editor->documentDir = '/home/wxgkujqw/public_html/';
$editor->documentURL = 'http://thequeensowncameronhighlandersofcanada.net/';
$editor->emoticonDir = '/home/wxgkujqw/public_html/.smileys/';
$editor->emoticonURL = 'http://thequeensowncameronhighlandersofcanada.net/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://thequeensowncameronhighlandersofcanada.net/regiment/photo_gallery/Trg/Bloody Claymore I  29 Sep-01 Oct 00/.wysiwygPro_preview_eacf331f0ffc35d4b482f1d15a887d3b.php?randomId=oiSD6oDQY9NB0Zlvo20ZjnInkWcZG7vYIDo1gBVixOn_P1pfunsiOFR_P5Xks_OaZx3QzrnX4cdK9NK5OYS0RDyYfuW1zEO9vEhQsyDkToB3cWd1pS77jv9iyuMdsQCoWAl8wKqbkLjFsqvECWMzE5etYo2RL_CXmswA8aHYYKYdnKTib8ovqI980gRy78AsCtHgyZ2N9dG4hFFNMzI4OqomHGyyluwCEEbURYRHtPlpZRB0ebh9sIFe48jvchAm';
// print the editor to the browser:
$editor->htmlCharset = 'us-ascii';
$editor->urlFormat = 'relative';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>
