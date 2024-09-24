<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>WanderLao - Discover China's Wonders</title>
    
</head>
<body>
    <!-- Hero Section -->
    <header class="hero">
        <div class="hero-content">
            <h1>Welcome to WanderLao</h1>
            <p>Discover the Wonders of China</p>
            <button class="cta-btn" onclick="scrollToDestinations()">Explore Packages</button>
        </div>
    </header>

    <!-- Popular Destinations Section -->
    <section class="popular-destinations" id="destinations">
        <h2>Popular Destinations</h2>
        <div class="destination-list">
            <?php foreach ($destinations as $destination): ?>
                <div class="destination-item">
                <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['name']; ?>">
                <h3><?php echo $destination['name']; ?></h3>
                    <p><?php echo $destination['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
        <h2>Start Your Journey with WanderLao</h2>
        <p>Explore our exclusive travel packages to experience the best of China.</p>
        <a href="homepage.php" class="cta-link">View Travel Packages</a>
    </section>

    <script>
        function scrollToDestinations() {
            document.getElementById('destinations').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>