<?php
echo "TU DZIAŁA PHP";
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$time = date('Y-m-d H:i:s');
$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$logData = "$time | $ip | $method | $url | $userAgent\n";


$logFile = 'logs.txt';
$file = fopen($logFile, 'a');
fwrite($file, $logData);
fclose($file);

$timeFrame = 1; 
$requestLimit = 5; 

if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = [];
}

$currentTime = microtime(true);
$_SESSION['requests'] = array_filter($_SESSION['requests'], function($timestamp) use ($currentTime, $timeFrame) {
    return ($timestamp >= ($currentTime - $timeFrame));
});

$_SESSION['requests'][] = $currentTime;

if (count($_SESSION['requests']) > $requestLimit) {
    header('HTTP/1.1 429 Too Many Requests');
    exit('Too Many Requests - Try again later');
}