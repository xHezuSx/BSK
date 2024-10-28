<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Słuchawki - Jakub & Jakub shop</title>
    <link rel="icon" href="../assets/icon.jpg" type="image/jpg">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .product-page {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .product-image {
            max-width: 100%;
            max-height: 400px;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .product-details {
            text-align: center;
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .product-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
        .product-price {
            font-size: 22px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .product-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .product-actions a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .product-actions a:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sklep Internetowy - Produkt</h1>
    </header>

    <div class="product-page">
        <img src="../assets/pol_pl_Cellularline-Style-Color-Bezprzewodowe-sluchawki-Bluetooth-V5-3-TWS-z-etui-ladujacym-bialy-243106_1.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">AirPods Pro 2</h2>
            <p class="product-description">Dla osób ceniących sobie jakość: AirPods Pro 2 to połączenie doskonałego dźwięku, zaawansowanych funkcji i eleganckiego designu. Idealne dla osób, które oczekują od swoich słuchawek najwyższej jakości.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Aktywna redukcja hałasu </strong> Zapewniają niesamowicie czysty dźwięk, izolując Cię od otoczenia.</li>
            <li><strong>Tryb przezroczysty</strong> Słyszysz dźwięki otoczenia, gdy tego potrzebujesz.</li>
            <li><strong>Dopasowanie indywidualne:</strong> Dzięki różnym rozmiarom końcówek silikonowych zapewniają doskonałe dopasowanie i komfort.</li>
            <li><strong>Dźwięk przestrzenny:</strong> Tworzy kinowe wrażenia dźwiękowe dla muzyki i filmów.</li>
            <li><strong>Czip H2</strong> Zaawansowany czip zapewnia jeszcze lepszą jakość dźwięku i wydajność.</li>
            <li><strong>Sterowanie dotykowe:</strong> Intuicyjne sterowanie muzyką i połączeniami.</li>
            <li><strong>Bateria:</strong> Długi czas pracy na jednym ładowaniu.</li>
            <li><strong>Etui ładujące MagSafe:</strong> Szybkie i wygodne ładowanie.</li>
            <li><strong>Odporność na pot i wodę</strong>: Idealne do aktywności fizycznej.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
