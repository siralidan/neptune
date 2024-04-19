<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Access Legal Services') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Add animation to rotate the logo */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .preloader img {
            /* Apply animation to the logo */
            animation: spin 3s linear infinite; /* Adjust the duration as needed */
        }

        .loaded {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <!-- Replace the SVG with your logo image -->
        <img src="images/mark-svg.png" alt="Logo" class="w-12 h-12"> <!-- Adjust the size as needed -->
    </div>

    <div class="loaded" id="loaded">
        @include('components.header')

        <main class="">
            {{ $slot }}
        </main>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/6613ff4e1ec1082f04e0112c/1hqv1qjjc';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        @include('components.footer')
    </div>

    <script>
        window.addEventListener('load', function () {
            var preloader = document.getElementById('preloader');
            var loaded = document.getElementById('loaded');

            preloader.style.display = 'none';
            loaded.style.display = 'block';
        });
    </script>

</body>

</html>
