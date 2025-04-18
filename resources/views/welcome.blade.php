@extends('layouts.portfolio')

@section('title', 'Home Page')

@section('content')

     <!-- start nav -->
     @include('front.nav')
     <!-- end nav -->

      <!-- start carasaul -->
      @include('front.carasaul')
   <!-- end carasaul -->

       <!-- start about -->
    <h1 id="about" class="myheading">{{ __('messages.About') }}</h1>
    <div class="container">
        @include('front.about')
    </div>
    <!-- end about -->

      <!-- start services -->
      <h1 id="services" class="myheading">{{ __('messages.Services') }}</h1>
      <div class="container">
        @include('front.services')
      </div>
       <!-- end services -->

          <!-- start skills -->
   <h1 id="skills" class="myheading">{{ __('messages.Skills') }}</h1>
   <div class="container">
    @include('front.skills')
   </div>
    <!-- end skills -->

     <!-- start footer -->
   
     @include('front.footer')
  
     <!-- end footer -->

@endsection