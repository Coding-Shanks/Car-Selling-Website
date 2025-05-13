<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - AutoVibe</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="contact">
        <h2>Contact Us</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include 'config.php';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $car_id = isset($_POST['car_id']) ? $_POST['car_id'] : null;

            $stmt = $pdo->prepare("INSERT INTO inquiries (name, email, message, car_id) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $message, $car_id]);
            echo "<p class='success'>Message sent successfully!</p>";
        }
        ?>
        <form class="contact-form" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <?php if (isset($_GET['car_id'])) {
                echo "<input type='hidden' name='car_id' value='{$_GET['car_id']}'>";
            } ?>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
    <?php include 'footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>