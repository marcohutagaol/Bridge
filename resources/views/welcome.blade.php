<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bridge</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(160deg, #13547a 0%, #80d0c7 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-container {
            max-width: 1200px;
            width: 90%;
            padding: 40px;
            text-align: center;
            color: white;
        }

        .logo {
            margin-bottom: 2rem;
        }

        .logo i {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .logo span {
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .welcome-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .welcome-subtitle {
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        .buttons-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 2rem;
        }

        .welcome-btn {
            padding: 12px 40px;
            border-radius: 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-register {
            background-color: white;
            color: #13547a;
            border: 2px solid white;
        }

        .btn-register:hover {
            background-color: transparent;
            color: white;
            transform: translateY(-2px);
        }

        .btn-login {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-login:hover {
            background-color: white;
            color: #13547a;
            transform: translateY(-2px);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 4rem;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .feature-description {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .welcome-title {
                font-size: 2.5rem;
            }

            .welcome-subtitle {
                font-size: 1rem;
            }

            .buttons-container {
                flex-direction: column;
                align-items: center;
            }

            .welcome-btn {
                width: 100%;
                max-width: 250px;
            }
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <div class="logo">
            <i class="bi-back"></i>
            <span>Bridge</span>
        </div>

        <h1 class="welcome-title">Welcome to Bridge</h1>
        <p class="welcome-subtitle">Your gateway to endless learning opportunities and career growth</p>

        <div class="buttons-container">
            <a href="{{ route('register') }}" class="welcome-btn btn-register">Register</a>
            <a href="{{ route('login') }}" class="welcome-btn btn-login">Sign In</a>
        </div>

        <div class="features">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="bi-book"></i>
                </div>
                <h3 class="feature-title">Learn Anywhere</h3>
                <p class="feature-description">Access quality education from anywhere in the world</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="bi-graph-up"></i>
                </div>
                <h3 class="feature-title">Track Progress</h3>
                <p class="feature-description">Monitor your learning journey with detailed analytics</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="bi-people"></i>
                </div>
                <h3 class="feature-title">Join Community</h3>
                <p class="feature-description">Connect with learners and experts worldwide</p>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>