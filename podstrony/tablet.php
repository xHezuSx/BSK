<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelt - Jakub & Jakub shop</title>
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
        <img src="../assets/images (1).jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Tabelet Lenovo M10</h2>
            <p class="product-description">Dla całej rodziny: Lenovo M10 to wszechstronny tablet, idealny do domowej rozrywki. Dzięki dużemu, czytelnemu ekranowi, przystępnej cenie i szerokiej gamie aplikacji, zapewni rozrywkę zarówno dorosłym, jak i najmłodszym. Do nauki i pracy: Lenovo M10 to również praktyczne narzędzie do nauki i pracy. Możesz na nim wygodnie przeglądać dokumenty, czytać książki elektroniczne i wykonywać podstawowe zadania. Kompaktowy i przenośny: Dzięki niewielkim wymiarom i lekkiej konstrukcji, Lenovo M10 z łatwością zmieści się w każdej torbie. Możesz zabrać go ze sobą wszędzie i cieszyć się ulubionymi treściami w dowolnym miejscu.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Ekran:</strong> Wysokiej jakości wyświetlacz o żywych kolorach.</li>
            <li><strong>Procesor:</strong> Wydajny procesor zapewniający płynną pracę.</li>
            <li><strong>Pamięć:</strong> Duża pamięć wewnętrzna i możliwość rozszerzenia za pomocą karty microSD.</li>
            <li><strong>Aparat:</strong> Zaawansowany aparat do robienia wysokiej jakości zdjęć i nagrywania filmów.</li>
            <li><strong>Bateria:</strong> Długa żywotność baterii, umożliwiająca długie godziny pracy bez konieczności ładowania.</li>
            <li><strong>System operacyjny:</strong> Najnowsza wersja systemu Android.</li>
            <li><strong>Połączenia:</strong> Wi-Fi, Bluetooth, GPS.</li>
            <li><strong>Dodatkowe funkcje:</strong> Asystent głosowy, tryb czytania, tryb ciemny.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
