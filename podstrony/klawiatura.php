<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klawiatura - Jakub & Jakub shop</title>
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
        <img src="../assets/klawiatura.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Klawaitura mechaniczna Logitech G915</h2>
            <p class="product-description">Opis klawiatury mechanicznej Logitech G915
                Logitech G915 to klawiatura mechaniczna, która łączy w sobie elegancki design z zaawansowanymi technologiami. Wykonana z wysokiej jakości materiałów, wyróżnia się niezwykle smukłą konstrukcją i niskim profilem klawiszy. Dzięki technologii bezprzewodowej LIGHTSPEED oraz podświetleniu LIGHTSYNC RGB, zapewnia płynne działanie i personalizację. Przełączniki mechaniczne ROMER-G gwarantują precyzyjne i szybkie reakcje, co czyni ją idealnym wyborem zarówno dla graczy, jak i osób pracujących wymagających narzędzia najwyższej klasy.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Przełączniki mechaniczne:</strong> Zapewniają wyjątkową responsywność i satysfakcjonujące kliknięcie.</li>
            <li><strong>Podświetlenie RGB:</strong> Personalizacja podświetlenia z wieloma efektami.</li>
            <li><strong>Solidna konstrukcja:</strong> Wytrzymała obudowa zapewniająca długą żywotność.</li>
            <li><strong>Ergonomia:</strong> Wygodny układ klawiszy i podpórki pod nadgarstki.</li>
            <li><strong>Funkcje multimedialne:</strong> Dedykowane przyciski do kontroli multimediów.</li>
            <li><strong>Oprogramowanie:</strong> Zaawansowane oprogramowanie do konfiguracji klawiatury.</li>
            <li><strong>N-key rollover:</strong> Rejestrowanie wielu jednocześnie wciśniętych klawiszy.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
