<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Madrid Shirt Configurator</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <header>
        <div class="logo">
        <img src="../fotos/LogoRM.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="././Tenues/kleding.php">Tenues</a></li>
                <li><a href="#">Accessoires</a></li>
                <li><a href="#">Uitverkoop</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Zoeken...">
        </div>
        <div class="user-actions">
            <a href="#">Inloggen</a>
            <a href="/ProefExamen/Code-Webshop/Winkelwagen/winkelwagen.php">Winkelwagen</a>


        </div>        
    </header>

    <?php
    // Stel je voor dat deze gegevens uit een database komen
    $product = [
        'name' => 'Mens Home Authentic Shirt 24/25 White',
        'price' => 190.00,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'badges' => [
            'none' => 'None',
            'cl' => 'Champions League +$25.00',
            'laliga' => 'La Liga +$25.00'
        ]
    ];
    ?>

    <div class="container">
        <div class="product-image">
        <img src="../fotos/RealShirt.png" alt="Real Madrid Home Shirt">
        </div>
        <div class="product-info">
            <h1><?php echo $product['name']; ?></h1>
            <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
            <div class="selectors">
                <div class="size-selector">
                    <label>Size:</label>
                    <div class="sizes">
                        <?php foreach ($product['sizes'] as $size): ?>
                            <button class="size-btn"><?php echo $size; ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="badge-selector">
                    <label>Badge:</label>
                    <select>
                        <?php foreach ($product['badges'] as $badgeKey => $badgeValue): ?>
                            <option value="<?php echo $badgeKey; ?>"><?php echo $badgeValue; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="name-number">
                    <label>Name & Number:</label>
                    <input type="text" placeholder="Type here...">
                </div>
            </div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>


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
