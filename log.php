<?php
$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents("ip_log.txt", date("Y-m-d H:i:s") . " - IP: " . $ip . "\n", FILE_APPEND);
?>
