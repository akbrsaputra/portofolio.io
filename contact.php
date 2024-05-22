<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $response = "Message sent successfully!";
    } else {
        $response = "Message sending failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, title, and stylesheets here -->
</head>
<body>
    <!-- Your existing HTML content -->

    <footer>
        <div class="container">
            <h5 class="mb-4">Kontak Saya</h5>
            <?php if (isset($response)): ?>
                <div class="alert alert-info">
                    <?php echo $response; ?>
                </div>
            <?php endif; ?>
            <form action="contact.php" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="name" placeholder="Nama" required>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="3" placeholder="Pesan" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Kirim</button>
            </form>
            <p class="mt-4">&copy; 2024 [Nama Anda]. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts here -->
</body>
</html>
