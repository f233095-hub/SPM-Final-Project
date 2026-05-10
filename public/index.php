<?php
require_once '../src/FormValidator.php';
$formStatus = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    $formStatus = FormValidator::validateContactForm($name, $email, $message);
    if ($formStatus === "Success") {
        // In a real app, send email here
        header("Location: index.php?success=1#contact");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">QuickPOS</div>
        <nav>
            <a href="#features">Features</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact" class="btn">Sign Up</a>
        </nav>
    </header>

    <section id="hero">
        <h1>Transform Your Retail Experience</h1>
        <p>The modern POS system for your growing business.</p>
        <button class="btn">Get Started</button>
    </section>

    <section id="pricing">
        <h2>Pricing Plans</h2>
        <div class="cards">
            <div class="card"><h3>Basic</h3><p>$29/mo</p></div>
            <div class="card"><h3>Pro</h3><p>$79/mo</p></div>
            <div class="card"><h3>Enterprise</h3><p>Custom</p></div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <?php if (isset($_GET['success'])): ?>
            <div class="alert success">Thank you! Your message has been sent.</div>
        <?php endif; ?>
        <?php if ($formStatus && $formStatus !== "Success"): ?>
            <div class="alert error"><?php echo htmlspecialchars($formStatus); ?></div>
        <?php endif; ?>
        
        <form method="POST" action="index.php#contact">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2026 QuickPOS. All rights reserved.</p>
        <div class="socials">
            <a href="#">Twitter</a> | <a href="#">LinkedIn</a>
        </div>
    </footer>
</body>
</html>
