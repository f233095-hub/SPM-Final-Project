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
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            background: #0f0f1a;
            color: #e0e0e0;
            overflow-x: hidden;
        }

        /* 3D Header Styles */
        .header {
            background: linear-gradient(145deg, #1a1a2e 0%, #16213e 100%);
            color: white;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 
                0 10px 30px rgba(0,0,0,0.5),
                0 1px 0 rgba(255,255,255,0.1) inset;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(233, 69, 96, 0.2);
        }

        .logo {
            font-size: 2rem;
            font-weight: 800;
            color: #e94560;
            text-shadow: 
                0 0 20px rgba(233, 69, 96, 0.5),
                0 4px 8px rgba(0,0,0,0.3);
            letter-spacing: -1px;
            transform: perspective(500px) rotateY(-5deg);
            transition: transform 0.3s;
        }

        .logo:hover {
            transform: perspective(500px) rotateY(0deg) scale(1.05);
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav a {
            color: rgba(255,255,255,0.8);
            margin: 0 0.5rem;
            text-decoration: none;
            transition: all 0.3s;
            padding: 0.5rem 1rem;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }

        .nav a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(233,69,96,0.2), transparent);
            transform: translateY(100%);
            transition: transform 0.3s;
            border-radius: 12px;
        }

        .nav a:hover::before {
            transform: translateY(0);
        }

        .nav a:hover {
            color: #e94560;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(233, 69, 96, 0.2);
        }

        .btn-signup {
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            padding: 0.6rem 1.8rem;
            border-radius: 25px;
            box-shadow: 
                0 4px 15px rgba(233, 69, 96, 0.4),
                0 0 0 1px rgba(255,255,255,0.1) inset;
            border: none;
            font-weight: 600;
            transform: perspective(500px) translateZ(20px);
            transition: all 0.3s;
        }

        .btn-signup:hover {
            background: linear-gradient(135deg, #ff6b6b, #e94560);
            color: white;
            transform: perspective(500px) translateZ(30px) translateY(-2px);
            box-shadow: 
                0 8px 25px rgba(233, 69, 96, 0.6),
                0 0 0 1px rgba(255,255,255,0.2) inset;
        }

        /* 3D Hero Section */
        .hero {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: white;
            text-align: center;
            padding: 120px 5%;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(233, 69, 96, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(118, 75, 162, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            animation: fadeInUp 0.8s ease;
            text-shadow: 
                0 0 40px rgba(233, 69, 96, 0.3),
                0 10px 30px rgba(0,0,0,0.3);
            background: linear-gradient(135deg, #fff 0%, #e0e0ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transform: translateZ(50px);
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
            color: rgba(255,255,255,0.8);
            transform: translateZ(30px);
        }

        .cta-btn {
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            color: white;
            padding: 1.2rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-block;
            box-shadow: 
                0 10px 30px rgba(233, 69, 96, 0.4),
                0 0 0 1px rgba(255,255,255,0.1) inset,
                0 -5px 10px rgba(0,0,0,0.2) inset;
            transform: translateZ(40px);
            position: relative;
            overflow: hidden;
        }

        .cta-btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 30%,
                rgba(255,255,255,0.1) 50%,
                transparent 70%
            );
            transform: rotate(45deg) translateY(-100%);
            transition: transform 0.6s;
        }

        .cta-btn:hover::after {
            transform: rotate(45deg) translateY(100%);
        }

        .cta-btn:hover {
            transform: translateZ(60px) translateY(-5px) scale(1.05);
            box-shadow: 
                0 20px 40px rgba(233, 69, 96, 0.5),
                0 0 0 1px rgba(255,255,255,0.2) inset,
                0 -5px 10px rgba(0,0,0,0.2) inset;
        }

        /* 3D Features Section */
        .features {
            padding: 100px 5%;
            background: linear-gradient(180deg, #0f0f1a 0%, #1a1a2e 100%);
            position: relative;
        }

        .features::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(233,69,96,0.3), transparent);
        }

        .section-title {
            text-align: center;
            font-size: 2.8rem;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, #fff 0%, #e94560 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 10px 30px rgba(233, 69, 96, 0.2);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
            perspective: 1000px;
        }

        .feature-card {
            background: linear-gradient(145deg, #1a1a2e 0%, #16213e 100%);
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 
                0 10px 30px rgba(0,0,0,0.3),
                0 0 0 1px rgba(255,255,255,0.05) inset,
                0 -5px 10px rgba(0,0,0,0.2) inset;
            transform-style: preserve-3d;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #e94560, #ff6b6b, #e94560);
            transform: scaleX(0);
            transition: transform 0.5s;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-15px) rotateX(5deg) rotateY(-5deg);
            box-shadow: 
                0 30px 60px rgba(0,0,0,0.4),
                0 0 30px rgba(233, 69, 96, 0.1),
                0 0 0 1px rgba(255,255,255,0.1) inset;
        }

        .feature-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            transform: translateZ(30px);
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));
            transition: transform 0.3s;
        }

        .feature-card:hover .feature-icon {
            transform: translateZ(50px) scale(1.2);
        }

        .feature-card h3 {
            font-size: 1.6rem;
            margin-bottom: 1rem;
            color: #fff;
            transform: translateZ(20px);
        }

        .feature-card p {
            color: rgba(255,255,255,0.7);
            line-height: 1.6;
            transform: translateZ(10px);
        }

        /* 3D Pricing Section */
        .pricing {
            padding: 100px 5%;
            background: linear-gradient(180deg, #1a1a2e 0%, #0f0f1a 100%);
            position: relative;
        }

        .pricing .section-title {
            color: white;
            background: linear-gradient(135deg, #fff 0%, #e0e0ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
            perspective: 1500px;
            align-items: center;
        }

        .pricing-card {
            background: linear-gradient(145deg, #1e1e3f 0%, #16213e 100%);
            border-radius: 25px;
            padding: 2.5rem;
            position: relative;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            box-shadow: 
                0 15px 35px rgba(0,0,0,0.4),
                0 0 0 1px rgba(255,255,255,0.05) inset;
            transform-style: preserve-3d;
            border: 1px solid rgba(255,255,255,0.05);
        }

        .pricing-card:hover {
            transform: translateY(-20px) rotateX(5deg);
            box-shadow: 
                0 40px 80px rgba(0,0,0,0.5),
                0 0 40px rgba(233, 69, 96, 0.1);
        }

        .pricing-card.popular {
            border: 2px solid rgba(233, 69, 96, 0.5);
            transform: scale(1.08) translateZ(30px);
            box-shadow: 
                0 20px 50px rgba(233, 69, 96, 0.2),
                0 0 0 1px rgba(255,255,255,0.1) inset;
            z-index: 2;
        }

        .pricing-card.popular:hover {
            transform: scale(1.1) translateZ(50px) translateY(-10px);
            box-shadow: 
                0 50px 100px rgba(233, 69, 96, 0.3),
                0 0 50px rgba(233, 69, 96, 0.1);
        }

        .popular-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%) translateZ(40px);
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            color: white;
            padding: 8px 25px;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: bold;
            box-shadow: 0 5px 20px rgba(233, 69, 96, 0.4);
            z-index: 10;
        }

        .pricing-card h3 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #fff;
            transform: translateZ(20px);
        }

        .price {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
            transform: translateZ(30px);
            text-shadow: 0 10px 30px rgba(233, 69, 96, 0.2);
        }

        .price span {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.6);
            -webkit-text-fill-color: rgba(255,255,255,0.6);
        }

        .features-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2.5rem 0;
            text-align: left;
            transform: translateZ(10px);
        }

        .features-list li {
            padding: 12px 0;
            color: rgba(255,255,255,0.8);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .features-list li.disabled {
            color: rgba(255,255,255,0.3);
            text-decoration: line-through;
        }

        .pricing-btn {
            display: inline-block;
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            color: white;
            padding: 14px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.4s;
            transform: translateZ(20px);
            box-shadow: 0 5px 20px rgba(233, 69, 96, 0.3);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .pricing-btn:hover {
            transform: translateZ(40px) translateY(-3px) scale(1.05);
            box-shadow: 0 15px 40px rgba(233, 69, 96, 0.5);
        }

        /* 3D Contact Section */
        .contact-section {
            padding: 100px 5%;
            background: linear-gradient(180deg, #0f0f1a 0%, #1a1a2e 100%);
            position: relative;
        }

        .contact-subtitle {
            text-align: center;
            color: rgba(255,255,255,0.7);
            margin-bottom: 3rem;
            font-size: 1.2rem;
        }

        .error-messages {
            max-width: 600px;
            margin: 0 auto 2rem auto;
            background: linear-gradient(145deg, rgba(233,69,96,0.1), rgba(233,69,96,0.05));
            border-left: 4px solid #e94560;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(233, 69, 96, 0.1);
            backdrop-filter: blur(10px);
        }

        .error-messages p {
            color: #ff6b6b;
            margin: 8px 0;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: linear-gradient(145deg, #1a1a2e 0%, #16213e 100%);
            padding: 3rem;
            border-radius: 25px;
            box-shadow: 
                0 20px 60px rgba(0,0,0,0.4),
                0 0 0 1px rgba(255,255,255,0.05) inset;
            transform-style: preserve-3d;
            perspective: 1000px;
            border: 1px solid rgba(255,255,255,0.05);
        }

        .form-group {
            margin-bottom: 2rem;
            transform-style: preserve-3d;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: #fff;
            transform: translateZ(10px);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            background: rgba(255,255,255,0.05);
            border: 2px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s;
            font-family: inherit;
            color: #fff;
            transform: translateZ(5px);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #e94560;
            box-shadow: 0 0 20px rgba(233, 69, 96, 0.2);
            background: rgba(255,255,255,0.08);
            transform: translateZ(15px);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255,255,255,0.4);
        }

        .submit-btn {
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            color: white;
            padding: 16px 30px;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            width: 100%;
            transform: translateZ(20px);
            box-shadow: 
                0 10px 30px rgba(233, 69, 96, 0.3),
                0 0 0 1px rgba(255,255,255,0.1) inset;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 30%,
                rgba(255,255,255,0.2) 50%,
                transparent 70%
            );
            transform: rotate(45deg) translateY(-100%);
            transition: transform 0.6s;
        }

        .submit-btn:hover::after {
            transform: rotate(45deg) translateY(100%);
        }

        .submit-btn:hover {
            transform: translateZ(40px) translateY(-3px);
            box-shadow: 
                0 20px 50px rgba(233, 69, 96, 0.5),
                0 0 0 1px rgba(255,255,255,0.2) inset;
        }

        /* 3D Footer */
        .footer {
            background: linear-gradient(180deg, #0a0a15 0%, #1a1a2e 100%);
            color: white;
            padding: 80px 5% 30px;
            position: relative;
            border-top: 1px solid rgba(233, 69, 96, 0.1);
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(233,69,96,0.3), transparent);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            padding-bottom: 50px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .footer-section h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transform: translateZ(10px);
        }

        .footer-section h4 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: #fff;
            transform: translateZ(5px);
        }

        .footer-section p {
            color: rgba(255,255,255,0.6);
            line-height: 1.8;
        }

        .footer-section a {
            display: block;
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            margin-bottom: 0.8rem;
            transition: all 0.3s;
            padding: 5px 0;
        }

        .footer-section a:hover {
            color: #e94560;
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .social-icon {
            background: linear-gradient(145deg, #1a1a2e, #16213e);
            padding: 10px 20px;
            border-radius: 25px;
            display: inline-block;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.8);
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .social-icon:hover {
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            color: white;
            transform: translateY(-3px) translateZ(10px);
            box-shadow: 0 10px 25px rgba(233, 69, 96, 0.3);
            border-color: transparent;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            color: rgba(255,255,255,0.4);
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px) translateZ(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0) translateZ(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) translateZ(20px); }
            50% { transform: translateY(-10px) translateZ(30px); }
        }

        html {
            scroll-behavior: smooth;
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0f0f1a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #e94560, #ff6b6b);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #ff6b6b, #e94560);
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