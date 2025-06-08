<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        input {
            font-family: "Poppins", sans-serif;
        }

        .container {
            position: relative;
            width: 100%;
            background-color: #f0ffff;
            min-height: 100vh;
            overflow: hidden;
            background: linear-gradient(135deg, #e0f7fa 0%, #80deea 100%);
        }

        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .signin-signup {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 820px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 2rem;
            z-index: 5;
        }

        form {
            background: rgba(255, 255, 255, 0.9);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 150, 136, 0.1);
            backdrop-filter: blur(10px);
            width: 100%;
            max-width: 450px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.4s ease;
        }

        form:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 150, 136, 0.15);
        }

        .title {
            font-size: 2.2rem;
            color: #009688;
            margin-bottom: 2rem;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .input-field {
            position: relative;
            width: 100%;
            margin: 1rem 0;
        }

        .input-field input {
            width: 100%;
            padding: 1.2rem 3rem;
            font-size: 1rem;
            border-radius: 50px;
            border: 2px solid #b2ebf2;
            background: rgba(255, 255, 255, 0.9);
            color: #00838f;
            transition: all 0.3s ease;
        }

        .input-field input:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 15px rgba(0, 188, 212, 0.2);
            outline: none;
        }

        .input-field i {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #4dd0e1;
            transition: all 0.3s ease;
        }

        .input-field input:focus+i {
            color: #00acc1;
        }

        .btn {
            width: 150px;
            height: 49px;
            border: none;
            outline: none;
            border-radius: 49px;
            cursor: pointer;
            background: linear-gradient(45deg, #00bcd4, #009688);
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            margin: 10px 0;
            transition: all 0.5s;
        }

        .btn:hover {
            background: linear-gradient(45deg, #009688, #00bcd4);
            box-shadow: 0 8px 20px rgba(0, 188, 212, 0.3);
            transform: translateY(-2px);
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin: 1rem 0;
            color: #00838f;
        }

        .remember-me input[type="checkbox"] {
            accent-color: #00bcd4;
        }

        .text-sm {
            font-size: 0.9rem;
            color: #00838f;
            text-decoration: none;
            transition: all 0.3s;
        }

        .text-sm:hover {
            color: #00acc1;
        }

        .error-message {
            color: #e53935;
            font-size: 0.85rem;
            margin-top: 0.5rem;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            animation: fadeIn 0.5s ease-out;
        }

        @media (max-width: 768px) {
            .signin-signup {
                padding: 1rem;
            }

            form {
                padding: 2rem;
            }

            .title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 1024px) {
            .signin-signup {
                max-width: 90%;
                flex-direction: column;
            }

            form {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            form {
                padding: 1.5rem;
            }

            .title {
                font-size: 1.6rem;
            }

            .input-field input {
                padding: 1rem 2.5rem;
                font-size: 0.95rem;
            }

            .input-field i {
                font-size: 1rem;
                left: 1rem;
            }

            .btn {
                width: 130px;
                height: 45px;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 480px) {
            .title {
                font-size: 1.4rem;
            }

            .input-field input {
                padding: 0.9rem 2.2rem;
                font-size: 0.9rem;
            }

            .btn {
                width: 100%;
                height: 44px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>