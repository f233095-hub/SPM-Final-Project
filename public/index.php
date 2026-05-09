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

/* Features Section Styles - SFP-13 */
.section-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: #1a1a2e;
}

.features {
    padding: 80px 5%;
    background: #f8f9fa;
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

.pricing-card.popular:hover {
    transform: scale(1.05) translateY(-10px);
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

.pricing-btn.pro {
    background: #e94560;
}

.pricing-btn.pro:hover {
    background: #ff6b6b;
}
    </style>
</head>
<body>
    <!-- Header Section - Epic 1 -->
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
    <!-- Contact Form - Epic 5 (will add later) -->
    <!-- Footer - Epic 6 (will add later) -->
</body>
</html>