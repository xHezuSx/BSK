<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera - Jakub & Jakub shop</title>
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
        <img src="../assets/x1.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Kamera cyfrowa Panasonic HC-VX1</h2>
            <p class="product-description">Dla miłośników filmowania: Panasonic HC-VX1 to wszechstronna kamera, która pozwala uchwycić każdy moment w najwyższej jakości 4K. Dzięki zaawansowanym funkcjom, takim jak stabilizacja obrazu czy tryb slow motion, stworzysz profesjonalnie wyglądające filmy.
                Dla osób szukających łatwej w obsłudze kamery: HC-VX1 to kamera, która łączy zaawansowane funkcje z prostą obsługą. Nawet początkujący filmowcy będą mogli szybko opanować jej działanie i tworzyć piękne filmy.
                Dla osób ceniących sobie jakość obrazu: Dzięki dużej matrycy i jasnemu obiektywowi, Panasonic HC-VX1 zapewnia doskonałą jakość obrazu nawet w słabych warunkach oświetleniowych.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Rozdzielczość 4K:</strong> Nagrywanie filmów w ultra wysokiej rozdzielczości dla niesamowitej jakości obrazu.</li>
            <li><strong>Stabilizacja obrazu:</strong> Płynne nagrania nawet podczas ruchu.</li>
            <li><strong>Szeroki zakres dynamiczny:</strong> Doskonałe odwzorowanie szczegółów zarówno w jasnych, jak i ciemnych obszarach obrazu.</li>
            <li><strong>Obiektyw o dużej przysłonie:</strong> Wysoka jakość obrazu nawet w słabym oświetleniu.</li>
            <li><strong>Zwolnione tempo:</strong> Możliwość nagrywania filmów w zwolnionym tempie dla efektownych ujęć.</li>
            <li><strong>Ekran dotykowy:</strong> Intuicyjna obsługa i podgląd nagrań.</li>
            <li><strong>Złącza:</strong> HDMI, USB, microSD.</li>
            <li><strong>Akcesoria w zestawie:</strong> Bateria, ładowarka, pokrowiec.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

    </body>
</html>
