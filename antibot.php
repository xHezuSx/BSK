<?php
session_start();

$time = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$logData = "$time | $ip | $method | $url | $userAgent\n";

$logFile = 'logs.txt';
$file = fopen($logFile, 'a');
fwrite($file, $logData);
fclose($file);

// Ustawienia limitu requestów
$max_requests_per_second = 2; // Maksymalna liczba requestów na sekundę
$block_duration = 10; // Czas blokady w sekundach (np. 60 sekund)

// Inicjalizacja zmiennych sesji do śledzenia requestów
if (!isset($_SESSION['global_last_request_time'])) {
    $_SESSION['global_last_request_time'] = time();
    $_SESSION['global_request_count'] = 0;
}

// Sprawdź, czy użytkownik jest zablokowany
if (isset($_SESSION['blocked_until']) && $_SESSION['blocked_until'] > time()) {
    header('HTTP/1.0 429 Too Many Requests');
    exit("Zbyt wiele żądań. Spróbuj ponownie po " . ($_SESSION['blocked_until'] - time()) . " sekundach.");
}

// Aktualny czas
$current_time = time();

// Jeśli żądanie zostało wykonane w tej samej sekundzie co poprzednie
if ($current_time == $_SESSION['global_last_request_time']) {
    $_SESSION['global_request_count']++;

    // Jeśli liczba żądań przekroczyła dozwolony limit, blokuj użytkownika
    if ($_SESSION['global_request_count'] > $max_requests_per_second) {
        $_SESSION['blocked_until'] = $current_time + $block_duration;
        header('HTTP/1.0 429 Too Many Requests');
        exit("Zbyt wiele żądań. Spróbuj ponownie po $block_duration sekundach.");
    }
} else {
    // Zresetuj licznik, jeśli nadeszło nowe żądanie w nowej sekundzie
    $_SESSION['global_last_request_time'] = $current_time;
    $_SESSION['global_request_count'] = 1;
}

// Treść strony (jeśli limit nie został przekroczony)
echo "Witamy na stronie! Jesteś autoryzowany.";
?>