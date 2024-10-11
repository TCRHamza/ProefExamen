<?php
session_start();

// Verwerk het formulier als het wordt ingediend
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Haal de gegevens uit het formulier
    $product_id = $_POST['product_id'];
    $size = $_POST['size'];
    $name = $_POST['name'];
    $number = $_POST['number'];

    // Maak een array voor het product
    $product = [
        'id' => $product_id,
        'size' => $size,
        'name' => $name,
        'number' => $number,
        'quantity' => 1
    ];

    // Controleer of de winkelwagen al bestaat
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Voeg het product toe aan de winkelwagen
    $_SESSION['cart'][] = $product;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Madrid Shop - Shirt Selectie</title>
    <link rel="stylesheet" href="/Home-page/stylee.css"> <!-- Link naar je externe CSS bestand -->
</head>
<body>
    <header>
        <h1>Real Madrid Shop</h1>
    </header>

    <main>
        <h2>Selecteer jouw shirt</h2>
        
        <div class="product-container">
            <img src="shirt-image.jpg" alt="Real Madrid Shirt">
            <form action="" method="POST">
                <label for="size">Kies je maat:</label>
                <select name="size" id="size" required>
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                    <option value="XL">Extra Large</option>
                </select>

                <label for="name">Naam op de achterkant:</label>
                <input type="text" name="name" id="name" maxlength="15" placeholder="Jouw naam" required>

                <label for="number">Nummer:</label>
                <input type="number" name="number" id="number" min="1" max="99" placeholder="0" required>

                <input type="hidden" name="product_id" value="1">
                <button type="submit">Toevoegen aan winkelwagen</button>
            </form>
        </div>

        <div class="cart">
            <h2>Jouw winkelwagen</h2>
            <?php if (!empty($_SESSION['cart'])): ?>
                <ul>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <li>
                            Shirt maat: <?= htmlspecialchars($item['size']) ?>, Naam: <?= htmlspecialchars($item['name']) ?>, Nummer: <?= htmlspecialchars($item['number']) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Je winkelwagen is leeg.</p>
            <?php endif; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Real Madrid Shop</p>
    </footer>
</body>
</html>
