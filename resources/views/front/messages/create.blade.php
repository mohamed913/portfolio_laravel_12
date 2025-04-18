@extends('layouts.portfolio')

@section('title', 'create message2')

@section('content')

   <!-- start messages -->
 <!-- start nav -->
 @include('front.nav')
 <!-- end nav -->

   <div class="container">


      
        <div class="form_container">
            <h1>Contact Us</h1>
            <form class="form" action="{{ route('messages.store') }}" method="POST">
                @if (session('status'))
        <div class="success_message">
            {{ session('status') }}
        </div>
    @endif

                @csrf
                <div class="form_group">
                    <div class="input_with_label">
                     <label for="name">Name</label>
                     <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}"/>
                    </div>
                    <div class="error_message">@error('name') {{ $message }} @enderror</div>

                </div>
                <div class="form_group">
                    <div class="input_with_label">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}"/>
                    </div>
                    <div class="error_message">@error('email') {{ $message }} @enderror</div>

                </div>
                <div class="form_group">
                    <div class="input_with_label">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Enter your message" rows="5" cols="30">
                        {{ old('message') }}</textarea>
                    </div>
                    <div class="error_message">@error('message') {{ $message }} @enderror</div>

                </div>
                
                
                    <button type="submit">Send</button>

                
               
            </form>
        </div>
    

</div>
<!-- end messages -->

<!-- start footer -->
   
@include('front.footer')
  
<!-- end footer -->

@endsection
