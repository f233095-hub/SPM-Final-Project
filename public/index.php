<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern POS System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        /* Header Styles - SFP-8, SFP-9, SFP-10 */
        .header {
            background: #1a1a2e;
            color: white;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #e94560;
        }

        .nav a {
            color: white;
            margin: 0 1rem;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav a:hover {
            color: #e94560;
        }

        .btn-signup {
            background: #e94560;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
        }

        .btn-signup:hover {
            background: #ff6b6b;
            color: white;
        }

        /* Hero Section Styles - SFP-11, SFP-12 */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 100px 5%;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInUp 0.8s ease;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }

        .cta-btn {
            background: #e94560;
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: transform 0.3s, box-shadow 0.3s;
            display: inline-block;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            background: #ff6b6b;
        }

        /* Features Section Styles - SFP-13 */
        .features {
            padding: 80px 5%;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1a1a2e;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #1a1a2e;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Pricing Section Styles - SFP-14 */
        .pricing {
            padding: 80px 5%;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        }

        .pricing .section-title {
            color: white;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .pricing-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .pricing-card.popular {
            border: 2px solid #e94560;
            transform: scale(1.05);
        }

        .popular-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: #e94560;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .pricing-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #1a1a2e;
        }

        .price {
            font-size: 3rem;
            font-weight: bold;
            color: #e94560;
            margin-bottom: 1.5rem;
        }

        .price span {
            font-size: 1rem;
            color: #666;
        }

        .features-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem 0;
            text-align: left;
        }

        .features-list li {
            padding: 8px 0;
            color: #555;
        }

        .features-list li.disabled {
            color: #ccc;
            text-decoration: line-through;
        }

        .pricing-btn {
            display: inline-block;
            background: #1a1a2e;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }

        .pricing-btn:hover {
            background: #e94560;
        }

        /* Contact Form Styles - SFP-15 */
        .contact-section {
            padding: 80px 5%;
            background: #f8f9fa;
        }

        .contact-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        .error-messages {
            max-width: 600px;
            margin: 0 auto 2rem auto;
            background: #fee;
            border-left: 4px solid #e94560;
            padding: 1rem;
            border-radius: 5px;
        }

        .error-messages p {
            color: #e94560;
            margin: 5px 0;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #1a1a2e;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #e94560;
        }

        .submit-btn {
            background: #e94560;
            color: white;
            padding: 14px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            width: 100%;
        }

        .submit-btn:hover {
            background: #ff6b6b;
            transform: translateY(-2px);
        }

        /* Footer Styles - SFP-18, SFP-19 */
        .footer {
            background: #1a1a2e;
            color: white;
            padding: 60px 5% 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding-bottom: 40px;
            border-bottom: 1px solid #333;
        }

        .footer-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #e94560;
        }

        .footer-section h4 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            color: white;
        }

        .footer-section p {
            color: #aaa;
            line-height: 1.6;
        }

        .footer-section a {
            display: block;
            color: #aaa;
            text-decoration: none;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #e94560;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .social-icon {
            background: #333;
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
            font-size: 0.9rem;
        }

        .social-icon:hover {
            background: #e94560;
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            color: #888;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Header Section - Epic 1 (SFP-8, SFP-9, SFP-10) -->
    <header class="header">
        <div class="logo">QuickPOS</div>
        <nav class="nav">
            <a href="#features">Features</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>
            <a href="#contact" class="btn-signup">Sign Up</a>
        </nav>
    </header>

    <!-- Hero Section - Epic 2 (SFP-11, SFP-12) -->
    <section class="hero">
        <div class="hero-content">
            <h1>Modern POS System for Your Business</h1>
            <p>Process payments, manage inventory, and track sales - all in one place. Fast, secure, and easy to use.</p>
            <a href="#contact" class="cta-btn">Get Started Free →</a>
        </div>
    </section>

    <!-- Features Section - Epic 3 (SFP-13) -->
    <section id="features" class="features">
        <h2 class="section-title">Why Choose QuickPOS?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Lightning Fast</h3>
                <p>Process transactions in under 2 seconds with our optimized system.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Real-time Analytics</h3>
                <p>Track sales, inventory, and customer data instantly.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Secure Payments</h3>
                <p>PCI compliant with end-to-end encryption for safety.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">☁️</div>
                <h3>Cloud Sync</h3>
                <p>Access your data from anywhere, anytime.</p>
            </div>
        </div>
    </section>

    <!-- Pricing Section - Epic 4 (SFP-14) -->
    <section id="pricing" class="pricing">
        <h2 class="section-title">Simple, Transparent Pricing</h2>
        <div class="pricing-grid">
            <!-- Basic Plan -->
            <div class="pricing-card">
                <h3>Basic</h3>
                <div class="price">$29<span>/month</span></div>
                <ul class="features-list">
                    <li>✓ 1 Register</li>
                    <li>✓ Basic Reports</li>
                    <li>✓ Email Support</li>
                    <li>✓ Up to 500 transactions/month</li>
                    <li class="disabled">✗ Advanced Analytics</li>
                    <li class="disabled">✗ Inventory Management</li>
                </ul>
                <a href="#contact" class="pricing-btn">Choose Plan →</a>
            </div>

            <!-- Pro Plan (Popular) -->
            <div class="pricing-card popular">
                <div class="popular-badge">🔥 Most Popular</div>
                <h3>Pro</h3>
                <div class="price">$79<span>/month</span></div>
                <ul class="features-list">
                    <li>✓ 5 Registers</li>
                    <li>✓ Advanced Analytics</li>
                    <li>✓ Phone Support</li>
                    <li>✓ Unlimited Transactions</li>
                    <li>✓ Inventory Management</li>
                    <li class="disabled">✗ API Access</li>
                </ul>
                <a href="#contact" class="pricing-btn pro">Choose Plan →</a>
            </div>

            <!-- Enterprise Plan -->
            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">$199<span>/month</span></div>
                <ul class="features-list">
                    <li>✓ Unlimited Registers</li>
                    <li>✓ Custom Reports</li>
                    <li>✓ 24/7 Priority Support</li>
                    <li>✓ Unlimited Transactions</li>
                    <li>✓ Advanced Inventory</li>
                    <li>✓ Full API Access</li>
                </ul>
                <a href="#contact" class="pricing-btn">Choose Plan →</a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section - Epic 5 (SFP-15, SFP-16, SFP-17) -->
    <section id="contact" class="contact-section">
        <h2 class="section-title">Get In Touch</h2>
        <p class="contact-subtitle">Ready to transform your business? Contact us today!</p>
        
        <?php if (isset($_SESSION['form_errors']) && !empty($_SESSION['form_errors'])): ?>
            <div class="error-messages">
                <?php foreach ($_SESSION['form_errors'] as $error): ?>
                    <p>❌ <?php echo $error; ?></p>
                <?php endforeach; ?>
                <?php unset($_SESSION['form_errors']); ?>
            </div>
        <?php endif; ?>
        
        <form action="../src/contact-handler.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" value="<?php echo isset($_SESSION['form_data']['name']) ? htmlspecialchars($_SESSION['form_data']['name']) : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" value="<?php echo isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="5" required><?php echo isset($_SESSION['form_data']['message']) ? htmlspecialchars($_SESSION['form_data']['message']) : ''; ?></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Send Message →</button>
        </form>
    </section>

    <!-- Footer Section - Epic 6 (SFP-18, SFP-19) -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>QuickPOS</h3>
                <p>Modern POS system for modern businesses.</p>
            </div>
            
            <div class="footer-section">
                <h4>Quick Links</h4>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
            </div>
            
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#" class="social-icon">🐦 Twitter</a>
                    <a href="#" class="social-icon">🔗 LinkedIn</a>
                    <a href="#" class="social-icon">🐙 GitHub</a>
                    <a href="#" class="social-icon">📘 Facebook</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Contact Info</h4>
                <p>📧 hello@quickpos.com</p>
                <p>📞 +1 (555) 123-4567</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2026 QuickPOS. All rights reserved. | Made with ❤️ for modern businesses</p>
        </div>
    </footer>

    <?php 
    // Clear session data after showing
    if (isset($_SESSION['form_data'])) {
        unset($_SESSION['form_data']);
    }
    ?>
</body>
</html>