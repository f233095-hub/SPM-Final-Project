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
    <!-- Features Section - Epic 3 (will add later) -->
    <!-- Pricing Section - Epic 4 (will add later) -->
    <!-- Contact Form - Epic 5 (will add later) -->
    <!-- Footer - Epic 6 (will add later) -->
</body>
</html>