<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep Internetowy</title>
    <link rel="icon" href="assets/icon.jpg" type="image/jpg">
    
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
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 250px;
            margin: 15px;
            padding: 15px;
            text-align: center;
            transition: transform 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 400px; /* Stała wysokość dla wszystkich produktów */
            overflow: hidden; /* Ukrywanie zawartości, która wychodzi poza obszar */
            text-decoration: none;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-image {
            max-width: 100%;
            max-height: 150px; /* Stała wysokość obrazka */
            object-fit: cover; /* Dopasowanie obrazka do kontenera, przycięcie nadmiaru */
            margin-bottom: 10px;
        }
        .product-title {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }
        .product-description {
            font-size: 14px;
            margin-bottom: 10px;
            color: #666;
            text-align: center;
        }
        .product-price {
            font-size: 16px;
            font-weight: bold;
            color: #4CAF50;
            text-align: center;
        }
        a{
            text-decoration: none;
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
        <h1>Sklep Internetowy - Produkty</h1>
    </header>
       
       
    
    <div class="container">
        <!-- Product 1 -->
        <a href="podstrony/smartfon.php">
        <div class="product-card">
            <img src="assets/Smartfon-SAMSUNG-Galaxy-A35-5G-Czarny-front.jpg" alt="Produkt 1" class="product-image">
            <div class="product-title">Smartfon SAMSUNG Galaxy A35 5G</div>
            <div class="product-description">Nowoczesny smartfon z dużym wyświetlaczem i wydajnym procesorem.</div>
            <div class="product-price">Cena: 1999 PLN</div>
        </div>
        </a>

        <!-- Product 2 -->
        <a href="podstrony/laptop.php">
        <div class="product-card">
            <img src="assets/laptop-do-4000-zlotych-microsoft-surface-laptop-go-3.jpg" alt="Produkt 2" class="product-image">
            <div class="product-title">Laptop Pro 15</div>
            <div class="product-description">Wydajny laptop do pracy i rozrywki z ekranem 15 cali.</div>
            <div class="product-price">Cena: 3299 PLN</div>
        </div>
        </a>

        <!-- Product 3 -->
        <a href="podstrony/słuchawki.php
        ">
        <div class="product-card">
            <img src="assets/pol_pl_Cellularline-Style-Color-Bezprzewodowe-sluchawki-Bluetooth-V5-3-TWS-z-etui-ladujacym-bialy-243106_1.jpg" alt="Produkt 3" class="product-image">
            <div class="product-title">Słuchawki Bezprzewodowe</div>
            <div class="product-description">Wysokiej jakości słuchawki z redukcją szumów.</div>
            <div class="product-price">Cena: 299 PLN</div>
        </div>
        </a>

        <!-- Product 4 -->
        <a href="podstrony/zegarek.php
        ">
        <div class="product-card">
            <img src="assets/images.jpg" alt="Produkt 4" class="product-image">
            <div class="product-title">Zegarek Sportowy</div>
            <div class="product-description">Wodoodporny zegarek z funkcją monitorowania aktywności fizycznej.</div>
            <div class="product-price">Cena: 399 PLN</div>
        </div>
        </a>

        <!-- Product 5 -->
        <a href="podstrony/tablet.php
        ">
        <div class="product-card">
            <img src="assets/images (1).jpg" alt="Produkt 5" class="product-image">
            <div class="product-title">Tablet 10.5”</div>
            <div class="product-description">Lekki i wydajny tablet do pracy i zabawy.</div>
            <div class="product-price">Cena: 1499 PLN</div>
        </div>
        </a>

        <!-- Dodaj kolejne produkty w podobnym formacie -->
        
        <!-- Product 6 -->
        <a href="podstrony/kamera.php
        ">
        <div class="product-card">
            <img src="assets/x1.jpg" alt="Produkt 6" class="product-image">
            <div class="product-title">Kamera 4K</div>
            <div class="product-description">Nagrywaj w wysokiej rozdzielczości 4K, idealna na wyjazdy.</div>
            <div class="product-price">Cena: 1199 PLN</div>
        </div>
        </a>

        <!-- Product 7 -->
        <a href="podstrony/głośnik.php
        ">
        <div class="product-card">
            <img src="assets/glosniki.jpg" alt="Produkt 7" class="product-image">
            <div class="product-title">Głośnik Bluetooth</div>
            <div class="product-description">Przenośny głośnik z dźwiękiem wysokiej jakości.</div>
            <div class="product-price">Cena: 199 PLN</div>
        </div>
        </a>

        <!-- Product 8 -->
        <a href="podstrony/mysz.php
        ">
        <div class="product-card">
            <img src="assets/Mysz.jpg" alt="Produkt 8" class="product-image">
            <div class="product-title">Mysz Gamingowa</div>
            <div class="product-description">Precyzyjna mysz dla graczy z podświetleniem RGB.</div>
            <div class="product-price">Cena: 149 PLN</div>
        </div>
        </a>

        <!-- Product 9 -->
        <a href="podstrony/klawiatura.php
        ">
        <div class="product-card">
            <img src="assets/klawiatura.jpg" alt="Produkt 9" class="product-image">
            <div class="product-title">Klawiatura Mechaniczna</div>
            <div class="product-description">Ergonomiczna klawiatura mechaniczna z szybkim czasem reakcji.</div>
            <div class="product-price">Cena: 399 PLN</div>
        </div>
        </a>

        <!-- Product 10 -->
        <a href="podstrony/monitor.php
        ">
        <div class="product-card">
            <img src="assets/monito.jpg" alt="Produkt 10" class="product-image">
            <div class="product-title">Monitor 27” 144Hz</div>
            <div class="product-description">Monitor o wysokiej częstotliwości odświeżania idealny do gier.</div>
            <div class="product-price">Cena: 1299 PLN</div>
        </div>
        </a>

        <!-- Product 11 -->
        <a href="podstrony/krzesło.php
        ">
        <div class="product-card">
            <img src="assets/fotele.jpg" alt="Produkt 11" class="product-image">
            <div class="product-title">Krzesło Gamingowe</div>
            <div class="product-description">Wygodne krzesło gamingowe z regulacją oparcia.</div>
            <div class="product-price">Cena: 799 PLN</div>
        </div>
        </a>

        <!-- Product 12 -->
        <a href="podstrony/drukarka.php
        ">
        <div class="product-card">
            <img src="assets/drukara.jpg" alt="Produkt 12" class="product-image">
            <div class="product-title">Drukarka Laserowa</div>
            <div class="product-description">Szybka drukarka laserowa z funkcją skanowania.</div>
            <div class="product-price">Cena: 499 PLN</div>
        </div>
        </a>

        <!-- Dodaj pozostałe produkty -->

    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>
</body>
</html>
