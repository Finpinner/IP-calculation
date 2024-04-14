<!DOCTYPE html>
<html>
<head>
<title>IP calculation</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
/* PHP code that writes the IP address of the device to the file
"ip_addresses.txt" */
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = 'ip_addresses.txt';
$current = file_get_contents($file);
$current .= $ip."\n";
file_put_contents($file, $current);
?>
</body>
</html>