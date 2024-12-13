<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor - Jakub & Jakub shop</title>
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
        <img src="../assets/monito.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Monitor Acer 27" 144Hz</h2>
            <p class="product-description">Opis monitora Acer 27" 144Hz
                Acer 27" 144Hz to doskonały wybór zarówno dla graczy, jak i osób pracujących przy komputerze, które cenią sobie płynność obrazu i wysoką jakość wyświetlanych treści. Dzięki częstotliwości odświeżania 144 Hz, obraz jest niezwykle płynny, co przekłada się na lepsze wrażenia podczas grania i edycji wideo. Matryca o przekątnej 27 cali zapewnia odpowiednio duży obszar roboczy, a wysoka rozdzielczość gwarantuje ostry i szczegółowy obraz. Ten monitor to połączenie wydajności i estetyki, idealny dla osób poszukujących wysokiej jakości sprzętu do codziennego użytkowania.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Rozdzielczość:</strong> QHD (2560x1440) dla szczegółowego obrazu.</li>
            <li><strong>Odświeżanie:</strong> 144 Hz zapewnia płynność obrazu, idealną do gier.</li>
            <li><strong>Czas reakcji:</strong> Niskie opóźnienia dla minimalnego smużenia.</li>
            <li><strong>Panel:</strong> IPS oferuje szerokie kąty widzenia i żywe kolory.</li>
            <li><strong>Technologia:</strong> AMD FreeSync lub NVIDIA G-SYNC (w zależności od modelu) dla płynnej rozgrywki.</li>
            <li><strong>Ergonomia:</strong> Regulowana wysokość, nachylenie i obrót dla optymalnego komfortu.</li>
            <li><strong>Podłączenia:</strong> HDMI, DisplayPort, USB.</li>
            <li><strong>Dodatkowe funkcje:</strong> Tryby obrazu, głośniki wbudowane (opcjonalnie).</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
