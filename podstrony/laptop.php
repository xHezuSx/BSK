<?php
    include 'antibot.php'
?>  
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop - Jakub & Jakub shop</title>
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
        <img src="../assets/laptop-do-4000-zlotych-microsoft-surface-laptop-go-3.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Laptop 15 Pro</h2>
            <p class="product-description">Laptop 15 Pro to wszechstronny laptop, idealny zarówno do pracy, jak i rozrywki. Wyposażony w [procesor], [karta graficzna] i [pamięć RAM], zapewnia płynną pracę nawet przy wielu otwartych aplikacjach. Matryca [rozdzielczość] gwarantuje żywe kolory i ostry obraz, a [pojemność dysku] zapewnia wystarczająco dużo miejsca na wszystkie Twoje pliki. Lekka konstrukcja i długi czas pracy na baterii sprawiają, że możesz zabrać go wszędzie ze sobą.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Procesor:</strong> Intel Core i7 12700H</li>
            <li><strong>Karta graficzna:</strong> NVIDIA GeForce RTX 3060</li>
            <li><strong>Ekran:</strong> 15.6", QHD (2560x1440), 165 Hz, IPS</li>
            <li><strong>Pamięć RAM:</strong> 16 GB DDR5</li>
            <li><strong>Pamięć masowa:</strong> 1 TB SSD NVMe PCIe Gen4</li>
            <li><strong>System operacyjny:</strong> Windows 11 Pro</li>
            <li><strong>Bateria:</strong> 90 Wh</li>
            <li><strong>Porty:</strong> Thunderbolt 4 (x2), USB-A 3.2 Gen 2 (x2), HDMI 2.1, jack 3.5 mm, czytnik kart SD</li>
            <li><strong>Połączenia bezprzewodowe:</strong> Wi-Fi 6E, Bluetooth 5.2</li>
            <li><strong>Wymiary:</strong> 355 x 250 x 18 mm</li>
            <li><strong>Waga:</strong> 2 kg</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
