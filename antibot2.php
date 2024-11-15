<?php
session_start();

// Funkcja do parsowania User-Agent i pobierania informacji o przeglądarce i systemie operacyjnym
function parseUserAgent($user_agent) {
    $browser = 'Nieznana przeglądarka';
    $os = 'Nieznany system operacyjny';

    // Przykładowe sprawdzanie popularnych systemów operacyjnych
    if (preg_match('/Windows NT 10.0/i', $user_agent)) {
        $os = 'Windows 10';
    } elseif (preg_match('/Windows NT 6.3/i', $user_agent)) {
        $os = 'Windows 8.1';
    } elseif (preg_match('/Windows NT 6.2/i', $user_agent)) {
        $os = 'Windows 8';
    } elseif (preg_match('/Mac OS X/i', $user_agent)) {
        $os = 'Mac OS X';
    } elseif (preg_match('/Linux/i', $user_agent)) {
        $os = 'Linux';
    } elseif (preg_match('/Android/i', $user_agent)) {
        $os = 'Android';
    } elseif (preg_match('/iPhone|iPad|iPod/i', $user_agent)) {
        $os = 'iOS';
    }

    // Przykładowe sprawdzanie popularnych przeglądarek
    if (preg_match('/Chrome/i', $user_agent)) {
        $browser = 'Chrome';
    } elseif (preg_match('/Firefox/i', $user_agent)) {
        $browser = 'Firefox';
    } elseif (preg_match('/Safari/i', $user_agent) && !preg_match('/Chrome/i', $user_agent)) {
        $browser = 'Safari';
    } elseif (preg_match('/Edge/i', $user_agent)) {
        $browser = 'Edge';
    } elseif (preg_match('/Opera|OPR/i', $user_agent)) {
        $browser = 'Opera';
    } elseif (preg_match('/MSIE|Trident/i', $user_agent)) {
        $browser = 'Internet Explorer';
    }

    return [$browser, $os];
}

// Funkcja blokująca podejrzane adresy IP
function blockSuspiciousIPs($user_agent, $ip) {
    // Lista podejrzanych fragmentów User-Agent wskazujących na boty/skrypty
    $bot_patterns = [
        'bot', 'crawl', 'slurp', 'spider', 'mediapartners', 'curl', 'wget', 
        'python', 'php', 'scraper', 'httpclient'
    ];

    // Sprawdzenie User-Agent
    foreach ($bot_patterns as $pattern) {
        if (stripos($user_agent, $pattern) !== false) {
            // Zapisanie do pliku logów jako zablokowane IP
            $blockFile = 'blocked_ips.txt';
            $file = fopen($blockFile, 'a');
            fwrite($file, "$ip | $user_agent\n");
            fclose($file);

            // Zablokowanie dostępu
            header('HTTP/1.0 403 Forbidden');
            exit("Dostęp zabroniony. Twój adres IP został zablokowany.");
        }
    }
}

// Pobranie danych żądania
$time = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
list($browser, $os) = parseUserAgent($user_agent);

// Wywołanie funkcji blokującej dla podejrzanych IP
blockSuspiciousIPs($user_agent, $ip);

// Tworzenie loga
$logData = "$time | $ip | $method | $url | Przeglądarka: $browser | System: $os\n";

// Zapis do pliku logów
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
