<hr>
<?php
$myfile = fopen("webdictionary.txt", "r+") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>
<hr>
<?php
// yangi file yaratish
$myfile = fopen("testfile.txt", "w")
?>