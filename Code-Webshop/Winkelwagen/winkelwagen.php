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
        <div class="logo">
            <img src="../fotos/LogoRM.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="././Tenues/kleding.php">Tenues</a></li>
                <li><a href="#">Uitverkoop</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Zoeken...">
        </div>
        <div class="user-actions">
            <a href="#">Inloggen</a>
            <a href="./Winkelwagen/winkelwagen.php">Winkelwagen</a>
        </div>        
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
        <div class="footer-container">
            <div class="footer-column">
                <h4>Winkel</h4>
                <ul>
                    
                    <li><a href="#">Verzending & Retouren</a></li>
                    <li><a href="#">Mijn bestelling volgen</a></li>
                    <li><a href="#">Mijn account</a></li>

                </ul>
            </div>
            <div class="footer-column">
                <h4>Over ons</h4>
                <ul>
                    <li><a href="#">Privacybeleid</a></li>
                    <li><a href="#">Cookiebeleid</a></li>
                    <li><a href="#">Algemene voorwaarden</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Hulp nodig?</h4>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Veelgestelde vragen</a></li>
                </ul>
            </div>
          
        </div>
        
        </div>
      
       
        <div class="footer-social">
            <a href="#"><img src="../fotos/Facebook-Logo.jpg" alt="Facebook"></a>
            <a href="#"><img src="../fotos/Insta-logo.png" alt="Instagram"></a>
            <a href="#"><img src="../fotos/twitter-logo.png" alt="Twitter"></a>
            <a href="#"><img src="../fotos/tiktok-logo.png" alt="TikTok"></a>
            <a href="#"><img src="../fotos/youtube-logo.png" alt="YouTube"></a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Real Madrid CF Shop. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>
</html>
