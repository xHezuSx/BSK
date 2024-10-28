<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drukarka - Jakub & Jakub shop</title>
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
        <img src="../assets/drukara.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Drukarka laserowa Brother DCP-J315W</h2>
            <p class="product-description">Dla osób szukających praktycznego rozwiązania: Brother DCP-J315W to wielofunkcyjne urządzenie, które łączy w sobie funkcje drukarki, skanera i kopiaarki. Jest idealne do domowego biura lub dla studentów, którzy potrzebują niezawodnego urządzenia do codziennych zadań.
                Dla osób ceniących sobie wygodę: Dzięki łączności Wi-Fi, Brother DCP-J315W pozwala na drukowanie bezpośrednio z urządzeń mobilnych. Nie musisz już podłączać urządzenia kablem, co znacznie ułatwia pracę.
                Dla osób z ograniczonym budżetem: Brother DCP-J315W to przystępna cenowo opcja dla osób, które szukają funkcjonalnej drukarki bez konieczności wydawania dużych sum pieniędzy.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Technologia druku:</strong> Laserowa, gwarantująca wysoką jakość i trwałość wydruków.</li>
            <li><strong>Szybkość druku:</strong> 10 stron na minutę, co zapewnia wysoką wydajność.</li>
            <li><strong>Rozdzielczość druku:</strong> 1000 dpi, zapewniając wyraźny tekst i szczegółowe grafiki.</li>
            <li><strong>Połączenia:</strong> USB, Wi-Fi, Ethernet (w zależności od modelu), umożliwiające łatwe podłączenie do różnych urządzeń.</li>
            <li><strong>Pojemność podajnika:</strong> 1000 arkuszy, co pozwala na wydrukowanie większej ilości dokumentów bez konieczności częstego uzupełniania papieru.</li>
            <li><strong>Funkcje dodatkowe:</strong> Druk dwustronny, skanowanie, kopiowanie (w przypadku urządzeń wielofunkcyjnych).</li>
            <li><strong>Ekonomiczność:</strong> Niski koszt wydruku dzięki wydajny tonerom.</li>
            <li><strong>Kompatybilność:</strong> Szeroka kompatybilność z systemami operacyjnymi Windows, macOS i Linux.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
