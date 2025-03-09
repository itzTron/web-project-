<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ip = $_SERVER['REMOTE_ADDR'];
$log_file = "/var/www/html/log.txt";

// Log the IP with timestamp
$log_entry = date("Y-m-d H:i:s") . " - IP: " . $ip . "\n";

if (file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX)) {
    echo "IP logged successfully.";
} else {
    echo "ERROR: Could not write to log file.";
}
?>
