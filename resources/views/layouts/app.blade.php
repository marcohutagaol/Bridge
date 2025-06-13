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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            overflow-x: hidden;
        }

        .dropdown-menu {
            right: 0 !important;
        }
    </style>

</head>

<body class="font-sans antialiased overflow-x-hidden">
    <div class="min-h-screen bg-[#3bb3a9]">
        <nav class="navbar navbar-expand-lg py-1" style="min-height:40px; background-color: #3bb3a9;">
            <div class="container">
                <a class="navbar-brand" href="/home">
                    <i class="fas fa-bridge"></i>
                    <span>Bridge</span>
                </a>
                <div class="d-none d-lg-block me-3">
                    <div class="dropdown">
                        <a href="#" class="navbar-icon bi-person smoothscroll text-white" id="profileDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="font-size: 1.4rem;"></a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="/home">Back</a></li>
                            <li>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-[#3bb3a9] shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>