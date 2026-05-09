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
    <!-- Pricing Section - Epic 4 (will add later) -->
    <!-- Contact Form - Epic 5 (will add later) -->
    <!-- Footer - Epic 6 (will add later) -->
</body>
</html>