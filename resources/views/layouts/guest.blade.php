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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!--stylesheet-->
        <style>
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            display: flex;
        }

        .col-1 {
            flex: 1;
            background-color: #ffffff;
            padding: 20px;
        }

        .col-2 {
            flex: 1;
            background-color: #000000;
            padding: 20px;
            color: #ffffff;
        }

        .logo {
            display: block;
            margin: 0 auto;
            width: 50%;
        }
        </style>

    </head>
    <body>

        <div class="container">
            <div class="col-1">
                <div class="logo">
                    <img src="{{ asset('component/img/logo.png') }}" alt="">
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>

            <div class="col-2">
                <h2>right Side</h2>
                <p>This is the left side content.</p>
            </div>
        </div>

    </body>
</html>
