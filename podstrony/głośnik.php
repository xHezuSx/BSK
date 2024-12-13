<?php
    include 'antibot.php'
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Głośnik - Jakub & Jakub shop</title>
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
        <img src="../assets/glosniki.jpg" class="product-image">
        <div class="product-details">
            <h2 class="product-title">JBL Xtreme 3</h2>
            <p class="product-description">Dla miłośników głośnej muzyki: JBL Xtreme 3 to potężny, przenośny głośnik, który wypełni dźwiękiem każde pomieszczenie. Dzięki czterem przetwornikom i dwóm radiatorom basowym, dostarcza głębokich basów i czystych wysokich tonów, zapewniając niezapomniane wrażenia słuchowe.
                Dla osób aktywnych: Xtreme 3 to idealny towarzysz przygód. Jest wodoodporny i pyłoszczelny, dzięki czemu możesz zabrać go ze sobą na plażę, basen lub na imprezę w plenerze. Wytrzymała bateria zapewnia do 15 godzin odtwarzania muzyki bez przerwy.
                Dla fanów imprez: Jeśli lubisz organizować imprezy, JBL Xtreme 3 jest dla Ciebie. Możesz połączyć ze sobą kilka głośników Xtreme 3, aby uzyskać jeszcze głośniejszy i bardziej przestrzenny dźwięk.</p>
            <p class="product-price">Cena: 1999 PLN</p>
        </div>
        <div class="product-actions">
            <a href="#">Dodaj do koszyka</a>
            <a href="../strona.php">Powrót do sklepu</a>
        </div>
        <ul>
            <li><strong>Dźwięk:</strong> Potężny dźwięk w kompaktowej obudowie.</li>
            <li><strong>Wodoszczelność:</strong> IPX7 - odporność na zachlapania i zanurzenie w wodzie.</li>
            <li><strong>Bateria:</strong> Do 10 godzin odtwarzania muzyki na jednym ładowaniu.</li>
            <li><strong>Połączenie:</strong> Bezprzewodowe połączenie Bluetooth dla łatwego strumieniowania muzyki.</li>
            <li><strong>Wytrzymałość:</strong> Solidna konstrukcja i wbudowany karabińczyk umożliwiają przenoszenie w dowolne miejsce.</li>
            <li><strong>Głośnomówiący:</strong> Odbieranie połączeń telefonicznych bezpośrednio z głośnika.</li>
        </ul>
    </div>

    <footer>
        &copy; Jakub Sobczyński, Jakub Żakowski BSK 2024
    </footer>

</body>
</html>
