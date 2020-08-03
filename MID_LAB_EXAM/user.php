<?php
session_start();
$file  = fopen('data.txt', 'r');
$data  = fread($file, filesize('data.txt'));
fclose($data);

$user = explode('|', $data);

$id         = trim($user[0]);
$name       = trim($user[1]);
$email      = trim($user[3]);
$userType   = trim($user[4]);
?>
<html>

</html>