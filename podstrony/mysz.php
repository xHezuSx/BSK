<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysz - Jakub & Jakub shop</title>
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
        <img src="../assets/Mysz.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Mysz gamingowa Bloody A70</h2>
            <p class="product-description">Dla zapalonych graczy: Bloody A70 to niezwykle precyzyjna mysz gamingowa, stworzona dla najbardziej wymagających graczy. Dzięki zaawansowanym technologiom i ergonomicznemu kształtowi zapewnia niesamowitą precyzję i komfort podczas długich sesji gamingowych.
                Dla osób szukających wydajności: A70 to prawdziwa bestia wśród myszy gamingowych. Wyposażona w zaawansowany sensor optyczny i programowalne przyciski, gwarantuje błyskawiczną reakcję na każde Twoje polecenie.
                Dla fanów personalizacji: A70 to więcej niż tylko mysz – to narzędzie, które możesz dostosować do swoich indywidualnych preferencji. Dzięki oprogramowaniu możesz skonfigurować podświetlenie RGB, makra i profile, aby stworzyć idealne narzędzie do gry.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Sensor:</strong> Wysokiej jakości sensor optyczny zapewniający precyzję i szybkość.</li>
            <li><strong>Przełączniki:</strong> Wytrzymałe przełączniki o długiej żywotności.</li>
            <li><strong>Podświetlenie RGB:</strong> Personalizacja podświetlenia z wieloma efektami.</li>
            <li><strong>Profilowanie:</strong> Możliwość zapisania wielu profili z różnymi ustawieniami.</li>
            <li><strong>Oprogramowanie:</strong> Zaawansowane oprogramowanie do konfiguracji myszy.</li>
            <li><strong>Ergonomia:</strong> Wygodny kształt dopasowany do dłoni.</li>
            <li><strong>Dodatkowe przyciski:</strong> Programowalne przyciski boczne dla lepszej kontroli w grze.</li>
            <li><strong>Kabel:</strong> Pleciony kabel zapewniający trwałość.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
