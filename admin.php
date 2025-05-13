<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - AutoVibe</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="admin">
        <h2>Manage Cars</h2>
        <?php
        include 'config.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_car'])) {
            $make = $_POST['make'];
            $model = $_POST['model'];
            $year = $_POST['year'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $description = $_POST['description'];
            $mileage = $_POST['mileage'];

            $stmt = $pdo->prepare("INSERT INTO cars (make, model, year, price, image, description, mileage) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$make, $model, $year, $price, $image, $description, $mileage]);
            echo "<p class='success'>Car added successfully!</p>";
        }

        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $stmt = $pdo->prepare("DELETE FROM cars WHERE id = ?");
            $stmt->execute([$id]);
            echo "<p class='success'>Car deleted successfully!</p>";
        }
        ?>
        <h3>Add New Car</h3>
        <form class="admin-form" method="POST">
            <input type="text" name="make" placeholder="Make" required>
            <input type="text" name="model" placeholder="Model" required>
            <input type="number" name="year" placeholder="Year" required>
            <input type="number" name="price" placeholder="Price" step="0.01" required>
            <input type="text" name="image" placeholder="Image URL" required>
            <input type="number" name="mileage" placeholder="Mileage" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <button type="submit" name="add_car">Add Car</button>
        </form>

        <h3>Existing Cars</h3>
        <div class="car-grid">
            <?php
            $stmt = $pdo->query("SELECT * FROM cars");
            while ($car = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "
                <div class='car-card'>
                    <img src='{$car['image']}' alt='{$car['make']} {$car['model']}'>
                    <div class='car-info'>
                        <h3>{$car['make']} {$car['model']}</h3>
                        <p>$" . number_format($car['price'], 2) . " | {$car['year']}</p>
                        <a href='?delete={$car['id']}' class='car-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>