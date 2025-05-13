<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details - AutoVibe</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <?php
    include 'config.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        $car = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($car) {
    ?>
    <section class="car-details">
        <div class="car-details-content">
            <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['make'] . ' ' . $car['model']; ?>">
            <div class="car-details-info">
                <h2><?php echo $car['make'] . ' ' . $car['model']; ?></h2>
                <p><strong>Price:</strong> $<?php echo number_format($car['price'], 2); ?></p>
                <p><strong>Year:</strong> <?php echo $car['year']; ?></p>
                <p><strong>Mileage:</strong> <?php echo $car['mileage']; ?> miles</p>
                <p><strong>Description:</strong> <?php echo $car['description']; ?></p>
                <a href="contact.php?car_id=<?php echo $car['id']; ?>" class="cta-btn">Inquire Now</a>
            </div>
        </div>
    </section>
    <?php
        } else {
            echo "<p>Car not found.</p>";
        }
    }
    ?>
    <?php include 'footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>