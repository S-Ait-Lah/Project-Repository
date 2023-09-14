<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link src="">
        <script src="/build/assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/build/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/build/assets/bootstrap-icons/font/bootstrap-icons.css">



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="container-header">
        <div class="">
            <div class="row w-100">
                <div class="col-md-2 bg-info min-h-screen p-4">
                    <h1 class="font-block">Dashboard</h1>
                    <div>
                        <x-nav-link href="{{url('/admin/reservations')}}" class="d-block">Reservations</x-nav-link>
                        <x-nav-link href="{{url('/admin/catogures')}}" class="d-block">Categories</x-nav-link>
                        <x-nav-link href="{{url('/admin/tables')}}" class="d-block">Tables</x-nav-link>
                        <x-nav-link href="{{url('/admin/menus')}}" class="d-block">Menus</x-nav-link>
                    </div>
                </div>
                <main class="col-md-10 pt-5 bg-light">
                    <div class="px-5">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
