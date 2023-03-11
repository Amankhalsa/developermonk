<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
    <!-- Vendor CSS -->



    <!-- Template CSS -->

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.png')}}">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('backend/lib/remixicon/fonts/remixicon.css')}}">
    
    <link rel="stylesheet" href="{{asset('backend/lib/prismjs/themes/prism.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/lib/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('backend/lib/fontawesome/css/all.min.css')}}">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('backend/assets/css/style.min.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @include('livewire.backend.common.slider')
        <!-- sidebar -->
      
      @include('livewire.backend.common.header')
        <div class="min-h-screen bg-gray-100">
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('modals')
    <script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <script src="{{asset('backend/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('backend/lib/typeahead/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('backend/lib/cleavejs/cleave.min.js')}}"></script>
    <script src="{{asset('backend/lib/cleavejs/addons/cleave-phone.us.js')}}"></script>

    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('backend/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend//lib/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/script.js')}}"></script>
    <script src="{{asset('backend/assets/js/db.data.js')}}"></script>
    <script src="{{asset('backend/assets/js/db.events.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
      </script>
        @livewireScripts
    </body>
</html>
