<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('app.name', 'Laravel') }}</title>

       
        <!-- adding icon to the site  -->
        <link rel="icon" href="{{URL::asset('assets/imgs/portfolio.png')}}" type="image/png">
        <link rel="icon" href="{{URL::asset('assets/imgs/portfolio.png')}}" type="image/x-icon">
      
        <link rel="stylesheet" href="{{URL::asset('assets/normalize/normalize.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('assets/fontawesome-free-6.4.2-web/css/all.css')}}""  type="text/css" >
              <link rel="stylesheet" href="{{URL::asset('assets/css/index.css')}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{-- {{ $slot }} --}}
                @yield('content')
            </main>
        </div>
        <script src="{{URL::asset('assets/js/index.js')}}"></script>
    </body>
</html>
