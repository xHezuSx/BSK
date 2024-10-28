<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotel - Jakub & Jakub shop</title>
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
        <img src="../assets/fotele.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Krzesło gamingowe Diablo CHAIRS X-Horn</h2>
            <p class="product-description">Dla miłośników komfortu i stylu: Diablo X-Horn to nie tylko fotel, to tron dla graczy. Został zaprojektowany z myślą o długich sesjach przed komputerem, zapewniając maksymalny komfort dzięki ergonomicznej konstrukcji i wysokiej jakości materiałów.
                Dla osób szukających wytrzymałego sprzętu: X-Horn to prawdziwa bestia, gotowa na intensywne użytkowanie. Solidna rama i trwałe materiały gwarantują, że posłuży przez wiele lat.
                Dla tych, którzy cenią sobie indywidualizm: Dzięki szerokiej gamie kolorów i materiałów, możesz spersonalizować swoje krzesło i stworzyć unikalną przestrzeń do grania.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Ergonomia:</strong> Dopasowany kształt zapewniający komfort podczas długich sesji gamingowych.</li>
            <li><strong>Tapicerka:</strong> Wysokiej jakości materiały zapewniające trwałość i łatwe czyszczenie.</li>
            <li><strong>Regulacja:</strong> Możliwość regulacji wysokości, kąta nachylenia oparcia i podłokietników.</li>
            <li><strong>Poduszka lędźwiowa:</strong> Dodatkowe wsparcie dla kręgosłupa.</li>
            <li><strong>Poduszka pod głowę:</strong> Zapewnia komfort podczas długich sesji.</li>
            <li><strong>Podstawa:</strong> Solidna podstawa zapewniająca stabilność.</li>
            <li><strong>Design:</strong> Stylowy design pasujący do każdego gamingowego setupu.</li>
            <li><strong>Dodatkowe funkcje:</strong> (np. podświetlenie LED, funkcja bujania).</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
