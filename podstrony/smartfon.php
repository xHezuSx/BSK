<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep Internetowy - Produkt</title>
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
        <img src="../assets/Smartfon-SAMSUNG-Galaxy-A35-5G-Czarny-front.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Smartfon SAMSUNG Galaxy A35 5G</h2>
            <p class="product-description">Nowoczesny smartfon z dużym wyświetlaczem i wydajnym procesorem. Idealny do pracy, zabawy oraz korzystania z internetu w superszybkiej sieci 5G.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Procesor:</strong> Exynos 1380</li>
            <li><strong>Ekran:</strong> Super AMOLED 6.6"</li>
            <li><strong>Pamięć RAM:</strong> 6/8 GB</li>
            <li><strong>Pamięć wewnętrzna:</strong> 128/256 GB</li>
            <li><strong>Aparat główny:</strong> 50 MP + 8 MP + 5 MP</li>
            <li><strong>Aparat przedni:</strong> 13 MP</li>
            <li><strong>Bateria:</strong> 5000 mAh</li>
            <li><strong>System operacyjny:</strong> Android 13</li>
            <li><strong>Łączność:</strong> 5G, Wi-Fi, Bluetooth</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
