<hr>

<?php
echo readfile("webdictionary.txt");
?>

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

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);


?>
<hr>
