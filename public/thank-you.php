<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - QuickPOS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .thankyou-container {
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            max-width: 500px;
            margin: 2rem;
        }
        
        .checkmark {
            font-size: 5rem;
            color: #27ae60;
            margin-bottom: 1rem;
        }
        
        h1 {
            color: #1a1a2e;
            margin-bottom: 1rem;
        }
        
        p {
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .back-home {
            display: inline-block;
            background: #e94560;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: background 0.3s;
        }
        
        .back-home:hover {
            background: #ff6b6b;
        }
    </style>
</head>
<body>
    <div class="thankyou-container">
        <div class="checkmark">✓</div>
        <h1>Thank You!</h1>
        <p>We've received your message and will get back to you within 24 hours.</p>
        <a href="index.php" class="back-home">← Back to Home</a>
    </div>
</body>
</html>
<?php session_destroy(); ?>