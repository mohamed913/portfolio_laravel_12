<nav>
    <div class="brand"><a href="/">{{ __('messages.Abo-Hozifa') }}</a></div>
    <!-- <div class="brand"><img class="image_brand" src="imgs/portfolio.webp" alt=""></div> -->


    <i id="menubar" class="fa-solid fa-bars"></i>
  

    <div id="links" class="links">
      <ul id="linksul">
        <li><a href="/">{{ __('messages.Home') }}</a></li>
        <li><a href="#about">{{ __('messages.About') }}</a></li>
        <li><a href="#services">{{ __('messages.Services') }}</a></li>
        <li><a href="#skills">{{ __('messages.Skills') }}</a></li>
        <li><a href="#projects">{{ __('messages.Projects') }}</a></li>
        <li><a id="modal_add_contact" href="{{route('messages.create')}}">{{ __('messages.Contact') }}</a></li>
        @can('check-admin')
        <li><a  href="{{route('dash.index')}}">{{ __('messages.Dashboard') }}</a></li>
        @endcan

        
          <li>
            <a id="mylang" class="language" href="#">
            {{__('messages.Language')}}
            </a>
            <div id="mylangitems" class="langitems">
            <ul id="sub-menu1">
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li>
                  <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      {{ $properties['native'] }}
                  </a>
              </li>
          @endforeach
            </ul>
            </div>
  
          </li>  
        

      </ul>
    </div>
  </nav>
