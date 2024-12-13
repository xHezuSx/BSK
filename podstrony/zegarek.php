<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zegarek - Jakub & Jakub shop</title>
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
        <img src="../assets/images.jpg" alt="Smartfon" class="product-image">
        <div class="product-details">
            <h2 class="product-title">Garmin Fenix 7 Sapphire Solar</h2>
            <p class="product-description">Garmin Fenix 7 Sapphire Solar to niezwykle wytrzymały smartwatch, stworzony dla osób, które cenią sobie aktywny tryb życia. Dzięki zaawansowanym funkcjom treningowym, długiej żywotności baterii i odporności na wszelkie warunki atmosferyczne, jest idealnym towarzyszem każdej przygody. Fenix 7 Sapphire Solar to prawdziwa potęga technologiczna. Oferuje szeroki zakres funkcji, takich jak monitorowanie zdrowia, nawigacja GPS, płatności zbliżeniowe i wiele innych. Solarna bateria zapewnia jeszcze dłuższy czas pracy, dzięki czemu możesz cieszyć się wszystkimi jego możliwościami bez ograniczeń. Garmin Fenix 7 Sapphire Solar to zegarek premium, wykonany z najwyższej jakości materiałów. Solidna konstrukcja i elegancki design sprawiają, że jest nie tylko funkcjonalny, ale także stylowy.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Monitorowanie aktywności:</strong> Liczenie kroków, spalonych kalorii, dystansu.</li>
            <li><strong>Pomiar tętna:</strong> Ciągłe monitorowanie tętna na nadgarstku.</li>
            <li><strong>GPS</strong> Precyzyjne śledzenie trasy podczas biegania, jazdy na rowerze itp.</li>
            <li><strong>Pływanie:</strong> Monitorowanie stylu pływania, dystansu i liczby basenów.</li>
            <li><strong>Trening siłowy:</strong> Automatyczne rozpoznawanie ćwiczeń i liczbę powtórzeń.</li>
            <li><strong>Powiadomienia:</strong> Otrzymywanie powiadomień z telefonu (SMS, połączenia, powiadomienia z aplikacji).</li>
            <li><strong>Płatności zbliżeniowe: </strong>(jeśli model posiada) Bezkontaktowe płatności za pomocą zegarka.</li>
            <li><strong>Monitorowanie snu:</strong> Analiza jakości snu i fazy snu.</li>
            <li><strong>Odporność:</strong> Wysoka odporność na wodę, wstrząsy i zarysowania.</li>
            <li><strong>Autonomia:</strong> Długi czas pracy na baterii.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
