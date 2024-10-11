<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Winkelwagen</h1>
    </header>

    <main>
        <h2>Jouw geselecteerde shirts:</h2>

        <?php if (!empty($_SESSION['cart'])): ?>
            <ul>
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <li>
                        Shirt maat: <?= htmlspecialchars($item['size']) ?>, Naam: <?= htmlspecialchars($item['name']) ?>, Nummer: <?= htmlspecialchars($item['number']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="checkout.php">Ga naar afrekenen</a>
        <?php else: ?>
            <p>Je winkelwagen is leeg.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2024 Real Madrid Shop</p>
    </footer>
</body>
</html>
