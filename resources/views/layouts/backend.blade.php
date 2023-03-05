<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
  

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.png')}}">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('backend/lib/remixicon/fonts/remixicon.css')}}">
    
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('backend/assets/css/style.min.css')}}">
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('modals')
    <script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend//lib/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/script.js')}}"></script>
    <script src="{{asset('backend/assets/js/db.data.js')}}"></script>
    <script src="{{asset('backend/assets/js/db.events.js')}}"></script>
        @livewireScripts
    </body>
</html>
