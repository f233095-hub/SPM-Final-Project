<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - QuickPOS</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow-x: hidden;
            background: linear-gradient(135deg, #0f0c29 0%, #1a1a3e 25%, #24243e 50%, #1a1a3e 75%, #0f0c29 100%);
        }
        
        /* Animated Mesh Gradient Background */
        .mesh-gradient {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            overflow: hidden;
        }
        
        .mesh-blob {
            position: absolute;
            width: 50vw;
            height: 50vw;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.4;
            animation: float 20s infinite ease-in-out;
        }
        
        .blob-1 {
            background: radial-gradient(circle, #667eea, #764ba2);
            top: -10%;
            left: -10%;
            animation-delay: 0s;
        }
        
        .blob-2 {
            background: radial-gradient(circle, #f093fb, #f5576c);
            bottom: -10%;
            right: -10%;
            animation-delay: -5s;
            width: 60vw;
            height: 60vw;
        }
        
        .blob-3 {
            background: radial-gradient(circle, #4facfe, #00f2fe);
            top: 30%;
            left: 40%;
            animation-delay: -10s;
            width: 40vw;
            height: 40vw;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(50px, -50px) rotate(120deg); }
            66% { transform: translate(-30px, 30px) rotate(240deg); }
        }
        
        /* Particle Canvas */
        #particle-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }
        
        /* Glassmorphism Container */
        .thankyou-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 32px;
            padding: 3.5rem;
            max-width: 550px;
            margin: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            transform: translateY(0);
            transition: all 0.3s ease;
            animation: floatIn 0.8s cubic-bezier(0.34, 1.2, 0.64, 1);
        }
        
        @keyframes floatIn {
            0% {
                opacity: 0;
                transform: translateY(50px) scale(0.95);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        /* Animated Checkmark */
        .checkmark-wrapper {
            margin-bottom: 1.5rem;
        }
        
        .checkmark-circle {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            animation: pulse 2s infinite, scaleIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: 0 10px 30px rgba(39, 174, 96, 0.3);
        }
        
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.4);
            }
            50% {
                box-shadow: 0 0 0 20px rgba(46, 204, 113, 0);
            }
        }
        
        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            80% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        .checkmark {
            font-size: 3.5rem;
            color: white;
            font-weight: bold;
            animation: checkmarkDraw 0.5s ease-in-out 0.2s both;
        }
        
        @keyframes checkmarkDraw {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        /* Typography */
        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #fff, #e94560);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.02em;
        }
        
        p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2rem;
            line-height: 1.6;
            font-size: 1.05rem;
        }
        
        /* Glass Button */
        .back-home {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: linear-gradient(135deg, #e94560, #ff6b6b);
            color: white;
            padding: 14px 32px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(233, 69, 96, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .back-home::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .back-home:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .back-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(233, 69, 96, 0.5);
        }
        
        .back-home i {
            transition: transform 0.3s ease;
        }
        
        .back-home:hover i {
            transform: translateX(-5px);
        }
        
        /* Decorative Elements */
        .floating-dots {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
        }
        
        .dot {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: floatDot 15s infinite linear;
        }
        
        @keyframes floatDot {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.5;
            }
            90% {
                opacity: 0.5;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }
        
        /* Loading Animation */
        .loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            border: 3px solid rgba(255, 255, 255, 0.1);
            border-top-color: #e94560;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }
        
        @keyframes spin {
            to { transform: translate(-50%, -50%) rotate(360deg); }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .thankyou-container {
                padding: 2rem;
                margin: 1rem;
            }
            
            .checkmark-circle {
                width: 80px;
                height: 80px;
            }
            
            .checkmark {
                font-size: 2.8rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            p {
                font-size: 0.95rem;
            }
            
            .back-home {
                padding: 12px 28px;
                font-size: 0.9rem;
            }
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            .thankyou-container {
                background: rgba(0, 0, 0, 0.3);
            }
        }
        
        /* Reduced motion preference */
        @media (prefers-reduced-motion: reduce) {
            .mesh-blob,
            .checkmark-circle,
            .back-home,
            .thankyou-container {
                animation: none;
            }
        }
    </style>
</head>
<body>

<!-- Mesh Gradient Background -->
<div class="mesh-gradient">
    <div class="mesh-blob blob-1"></div>
    <div class="mesh-blob blob-2"></div>
    <div class="mesh-blob blob-3"></div>
</div>

<!-- Floating Particles -->
<canvas id="particle-canvas"></canvas>

<div class="floating-dots">
    <?php for($i = 0; $i < 20; $i++): ?>
        <div class="dot" style="
            width: <?php echo rand(2, 6); ?>px;
            height: <?php echo rand(2, 6); ?>px;
            left: <?php echo rand(0, 100); ?>%;
            animation-duration: <?php echo rand(8, 20); ?>s;
            animation-delay: <?php echo rand(0, 15); ?>s;
            opacity: <?php echo rand(20, 60) / 100; ?>;
        "></div>
    <?php endfor; ?>
</div>

<!-- Loading Spinner -->
<div class="loading-spinner"></div>

<!-- Thank You Container -->
<div class="thankyou-container" id="thankyouContainer">
    <div class="checkmark-wrapper">
        <div class="checkmark-circle">
            <div class="checkmark">✓</div>
        </div>
    </div>
    <h1>Thank You!</h1>
    <p>We've received your message and will get back to you within 24 hours.</p>
    <a href="index.php" class="back-home" id="backHomeBtn">
        <i class="fas fa-arrow-left"></i>
        Back to Home
    </a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1"></script>

<script>
    // Confetti Animation on Load
    function launchConfetti() {
        // Multiple confetti bursts
        canvasConfetti({
            particleCount: 150,
            spread: 70,
            origin: { y: 0.6 },
            colors: ['#e94560', '#ff6b6b', '#667eea', '#764ba2', '#27ae60']
        });
        
        setTimeout(() => {
            canvasConfetti({
                particleCount: 100,
                spread: 100,
                origin: { y: 0.5, x: 0.3 },
                colors: ['#e94560', '#f093fb', '#4facfe']
            });
        }, 200);
        
        setTimeout(() => {
            canvasConfetti({
                particleCount: 100,
                spread: 100,
                origin: { y: 0.5, x: 0.7 },
                colors: ['#667eea', '#764ba2', '#00f2fe']
            });
        }, 400);
        
        // Side cannons
        setTimeout(() => {
            canvasConfetti({
                particleCount: 50,
                angle: 60,
                spread: 55,
                origin: { x: 0, y: 0.7 }
            });
            canvasConfetti({
                particleCount: 50,
                angle: 120,
                spread: 55,
                origin: { x: 1, y: 0.7 }
            });
        }, 600);
    }
    
    // Particle System
    class ParticleSystem {
        constructor(canvas) {
            this.canvas = canvas;
            this.ctx = canvas.getContext('2d');
            this.particles = [];
            this.init();
        }
        
        init() {
            this.resize();
            window.addEventListener('resize', () => this.resize());
            this.animate();
        }
        
        resize() {
            this.canvas.width = window.innerWidth;
            this.canvas.height = window.innerHeight;
            this.createParticles();
        }
        
        createParticles() {
            this.particles = [];
            const particleCount = Math.min(100, Math.floor(window.innerWidth / 20));
            
            for (let i = 0; i < particleCount; i++) {
                this.particles.push({
                    x: Math.random() * this.canvas.width,
                    y: Math.random() * this.canvas.height,
                    radius: Math.random() * 2 + 1,
                    alpha: Math.random() * 0.3 + 0.1,
                    speedX: (Math.random() - 0.5) * 0.5,
                    speedY: (Math.random() - 0.5) * 0.5
                });
            }
        }
        
        animate() {
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
            
            for (let p of this.particles) {
                this.ctx.beginPath();
                this.ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                this.ctx.fillStyle = `rgba(255, 255, 255, ${p.alpha})`;
                this.ctx.fill();
                
                p.x += p.speedX;
                p.y += p.speedY;
                
                if (p.x < 0) p.x = this.canvas.width;
                if (p.x > this.canvas.width) p.x = 0;
                if (p.y < 0) p.y = this.canvas.height;
                if (p.y > this.canvas.height) p.y = 0;
            }
            
            requestAnimationFrame(() => this.animate());
        }
    }
    
    // GSAP Animations
    function initAnimations() {
        const container = document.querySelector('.thankyou-container');
        const h1 = document.querySelector('h1');
        const p = document.querySelector('p');
        const btn = document.querySelector('.back-home');
        
        // Reset styles for animation
        gsap.set([h1, p, btn], { opacity: 0, y: 20 });
        
        // Main container float in
        gsap.fromTo(container, 
            { scale: 0.9, opacity: 0 },
            { scale: 1, opacity: 1, duration: 0.6, ease: "back.out(1.2)" }
        );
        
        // Staggered text animation
        gsap.to(h1, { opacity: 1, y: 0, duration: 0.5, delay: 0.3, ease: "power2.out" });
        gsap.to(p, { opacity: 1, y: 0, duration: 0.5, delay: 0.5, ease: "power2.out" });
        gsap.to(btn, { opacity: 1, y: 0, duration: 0.5, delay: 0.7, ease: "power2.out" });
        
        // Floating animation for container
        gsap.to(container, {
            y: -10,
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });
    }
    
    // Magnetic Button Effect
    function initMagneticEffect() {
        const btn = document.querySelector('.back-home');
        
        btn.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(this, {
                duration: 0.3,
                x: x * 0.2,
                y: y * 0.2,
                ease: "power2.out"
            });
        });
        
        btn.addEventListener('mouseleave', function() {
            gsap.to(this, {
                duration: 0.5,
                x: 0,
                y: 0,
                ease: "elastic.out(1, 0.5)"
            });
        });
    }
    
    // Ripple effect on button click
    function initRippleEffect() {
        const btn = document.querySelector('.back-home');
        
        btn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            this.appendChild(ripple);
            
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            
            setTimeout(() => ripple.remove(), 600);
        });
    }
    
    // Add ripple styles dynamically
    const rippleStyle = document.createElement('style');
    rippleStyle.textContent = `
        .back-home {
            position: relative;
            overflow: hidden;
        }
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            transform: scale(0);
            animation: rippleAnim 0.6s linear;
            pointer-events: none;
        }
        @keyframes rippleAnim {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(rippleStyle);
    
    // Initialize everything
    document.addEventListener('DOMContentLoaded', function() {
        // Launch confetti
        launchConfetti();
        
        // Initialize particle system
        const canvas = document.getElementById('particle-canvas');
        if (canvas) {
            new ParticleSystem(canvas);
        }
        
        // Initialize GSAP animations
        initAnimations();
        
        // Initialize magnetic effect
        initMagneticEffect();
        
        // Initialize ripple effect
        initRippleEffect();
        
        // Add hover sound effect (optional - just for fun)
        const btn = document.querySelector('.back-home');
        btn.addEventListener('mouseenter', () => {
            gsap.to(btn, { scale: 1.05, duration: 0.2 });
        });
        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, { scale: 1, duration: 0.2 });
        });
    });
    
    // Preloader hide (if needed)
    window.addEventListener('load', function() {
        const spinner = document.querySelector('.loading-spinner');
        if (spinner) {
            gsap.to(spinner, { opacity: 0, duration: 0.3, onComplete: () => {
                spinner.style.visibility = 'hidden';
            }});
        }
    });
</script>

<?php session_destroy(); ?>
</body>
</html>