<?php 

if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
	$ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
	$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
}
else
{
	$ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
}

$browser = $_SERVER['HTTP_USER_AGENT'];

$contenido="
IP : $ipaddress
User-Agent : $browser
";
$archivo= fopen("ip.txt", 'w');
fwrite($archivo,$contenido);
