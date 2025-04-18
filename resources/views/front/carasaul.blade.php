
<div class="carasaul">
    <div class="myimg_container">
      <img class="myimg" src="{{URL::asset('assets/imgs/mohamed4.jpg')}}" alt="this is the picture of abo hozifa"
        title="this is the picture of abo hozifa" />
    </div>

    <div class="about">
      <h3>{{ __('messages.Hi') }}</h3>
      <h1>{{ __("messages.I'm") }} <span>{{ __('messages.Abo-Hozifa') }}</span></h1>
      <h2>{{ __("messages.I'm A Backend Web Developer") }}</h2></br>
      <button aria-label="press to see my work" class="btndownload_cv">{{ __('messages.My Work') }}</button>
      <a href="{{route('messages.create')}}" aria-label="press to contact me" class="btncontact_me">{{ __('messages.Contact') }}</a>
    </div>
  </div>