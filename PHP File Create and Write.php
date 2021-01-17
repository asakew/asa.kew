<?php 
$asaK = fopen("asaK.txt", "w") or die("Unable to open file!");
$txt = "Akmal\n";
fwrite($asaK, $txt);
?>