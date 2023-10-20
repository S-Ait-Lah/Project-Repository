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
        <link rel="stylesheet" href="/build/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/build/assets/bootstrap-icons/font/bootstrap-icons.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-light antialiased">
        <div class=" ">
            <div class="">
                <nav class="navbar navbar-expand-lg px-5 bg-info">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <x-application-logo style="height:30px;width:30px;"/>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="text-md text-gray-700 dark:text-gray-500 pe-2" href="#">Home</a>
                                <a class="text-md text-gray-700 dark:text-gray-500 pe-2" href="{{url('menus')}}">Menus</a>
                                <a class="text-md text-gray-700 dark:text-gray-500 pe-2" href="{{url('categures')}}">Categores</a>
                                <a class="text-md text-gray-700 dark:text-gray-500"      href="{{url('reservation/step-one')}}">Make Reservation</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container mt-3 px-5">
                {{ $slot }}
            </div>
        </div>

        <script src="/build/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>