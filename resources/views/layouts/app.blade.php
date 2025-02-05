<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
          crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Sidebar styles */
        .sidebar {
            background-color:rgb(161, 26, 26);
            color: white;
            height: 100vh; /* Full height */
            position: fixed;
            width: 240px;
            overflow-y: auto;
            padding: 20px 15px;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar a:hover {
            color: #ffc107; /* Highlight color */
        }

        .main-content {
            margin-left: 240px; /* Match sidebar width */
            padding: 20px;
        }
    </style>
</head>


<body class="font-sans antialiased">
    @include('layouts.navigation')
    
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid mb-3">
            <h2><b>BukSUniversity</b></h2>
        </div>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('student.index') }}" class="nav-link">
                    <i class="fa-regular fa-user me-2"></i> Student
                </a>
            </li>
            <!-- Add more links here -->
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        {{ $slot }}
    </div>


    

</body>
</html>
