<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abo-Hozifa</title>
  <!-- adding icon to the site  -->
  <link rel="icon" href="{{URL::asset('assets/imgs/portfolio.png')}}" type="image/png">
  <link rel="icon" href="{{URL::asset('assets/imgs/portfolio.png')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{URL::asset('assets/normalize/normalize.css')}}"/>
  <link rel="stylesheet" href="{{URL::asset('assets/fontawesome-free-6.4.2-web/css/all.css')}}""  type="text/css" >

  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" /> -->

  <link rel="stylesheet" href="{{URL::asset('assets/css/dash.css')}}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&display=swap" rel="stylesheet">
  <!-- Scripts -->
</head>

<body>
     <!-- start nav -->
     {{-- <x-front.modal /> --}}
     <!-- end nav -->
 
     <!-- start nav -->
     {{-- <x-dash.nav /> --}}
     @include('dash.nav')
     <!-- end nav -->

<!-- Page Content -->
<main>
    @yield('content')
</main>

 <!-- start sidebar -->

 @include('dash.sidebar')

 <!-- end sidebar -->



 <!-- start footer -->

 @include('front.footer')

 <!-- end footer -->

    <script src="{{URL::asset('assets/js/dash.js')}}"></script>
</body>

</html>