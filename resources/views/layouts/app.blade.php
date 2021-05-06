<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen md:px-20 bg-white">
            @include('User.partials.header')
            <br>
            <br>
            <!-- Page Heading -->
            

            <!-- Page Content -->
            <main> 
                {{ $slot }}
            </main>
        </div>
        @livewireScripts

        <script>
            window.$modals = {

                show(name) {
                    window.dispatchEvent(new CustomEvent('modal',{
                        detail: name
                    }));
                }
            }
        </script>
        <script src="{{asset('js/countdown.js')}}" defer></script>
    </body>
</html>