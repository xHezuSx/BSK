<?php
session_start();

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