<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoVibe - Buy Your Dream Car</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Drive Your Dream</h1>
            <p>Explore premium vehicles with AutoVibe</p>
            <a href="cars.php" class="cta-btn">Browse Cars</a>
        </div>
    </section>

    <section id="featured" class="featured">
        <h2>Featured Cars</h2>
        <div class="car-grid">
            <?php
            include 'config.php';
            $stmt = $pdo->query("SELECT * FROM cars LIMIT 3");
            $i = 1;
            while ($car = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "
                <div class='car-card' style='--i: $i'>
                    <img src='{$car['image']}' alt='{$car['make']} {$car['model']}'>
                    <div class='car-info'>
                        <h3>{$car['make']} {$car['model']}</h3>
                        <p>$" . number_format($car['price'], 2) . " | {$car['year']}</p>
                        <a href='car-details.php?id={$car['id']}' class='car-btn'>View Details</a>
                    </div>
                </div>";
                $i++;
            }
            ?>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"AutoVibe made buying my car a breeze!"</p>
                <h4>John Doe</h4>
            </div>
            <div class="testimonial-card">
                <p>"Great selection and amazing service!"</p>
                <h4>Jane Smith</h4>
            </div>
        </div>
    </section>

    <section id="newsletter" class="newsletter">
        <h2>Stay Updated</h2>
        <form class="newsletter-form">
            <input type="email" placeholder="Your Email" required>
            <button type="submit">Subscribe</button>
        </form>
    </section>

    <?php include 'footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>