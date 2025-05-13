<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Cars - AutoVibe</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="cars">
        <h2>Our Cars</h2>
        <div class="filter">
            <input type="text" id="search" placeholder="Search by make or model">
            <select id="year">
                <option value="">All Years</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="car-grid" id="car-grid">
            <?php
            include 'config.php';
            $stmt = $pdo->query("SELECT * FROM cars");
            $i = 1;
            while ($car = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "
                <div class='car-card' style='--i: $i' data-year='{$car['year']}'>
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

    <?php include 'footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>