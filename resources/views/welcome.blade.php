<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RiddleLab</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 25%, #2d2d2d 50%, #1e1e1e 75%, #0f0f0f 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .container {
            text-align: center;
            animation: fadeInUp 1.2s ease-out;
        }

        .logo {
            max-width: 400px;
            width: 80vw;
            height: auto;
            margin: auto;
            filter: drop-shadow(0 15px 35px rgba(0, 0, 0, 0.6));
            transition: all 0.3s ease;
            border-radius: 20px;
        }

        .logo:hover {
            transform: scale(1.05) translateY(-5px);
            filter: drop-shadow(0 20px 45px rgba(0, 0, 0, 0.8));
        }

        /* Animated gradient background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg,
            rgba(10, 10, 10, 0.3),
            rgba(26, 26, 26, 0.3),
            rgba(45, 45, 45, 0.3),
            rgba(30, 30, 30, 0.3));
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            z-index: -1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @media (max-width: 768px) {
            .logo {
                max-width: 300px;
                width: 85vw;
            }
        }

        @media (max-width: 480px) {
            .logo {
                max-width: 250px;
                width: 90vw;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <img src="/storage/meta/riddlelab-logo.png" alt="RiddleLab" class="logo">
</div>
</body>
</html>
