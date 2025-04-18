<div class="footer">
    
    <div class="footer_about_me">
      <h1>{{ __('messages.About') }}</h1>
     {{ __('messages.I have the ability to design complete web application and websites , write clean, well-designed code , Contribute in all phases of the
     development life-cycle and Follow industry best practices .') }}
    </div>
    <div class="links_footer">
      <ul id="linksul_footer">
      <h1>{{ __('messages.Links') }}</h1>
      <li><a href="#home">{{ __('messages.Home') }}</a></li>
      <li><a href="#about">{{ __('messages.About') }}</a></li>
      <li><a href="#services">{{ __('messages.Services') }}</a></li>
      <li><a href="#skills">{{ __('messages.Skills') }}</a></li>
      <li><a href="#projects">{{ __('messages.Projects') }}</a></li>
      <li><a id="modal_add_contact" href="{{route('messages.create')}}">{{ __('messages.Contact') }}</a></li>
      </ul>
    </div>
    <div class="services_footer">
    <h1>{{ __('messages.Services') }}</h1>
      <span>{{ __('messages.Web Development') }}</span>
      <span>{{ __('messages.Database Design') }}</span>
      <span>{{ __('messages.Server Management') }}</span>
    </div>
   
      <div class="contacts_me">
      <h1>{{ __('messages.Contact') }}</h1>
      <i class="fa-solid fa-phone"></i><span> {{ __('messages.(+2) 01090453033') }}</span></br>
      <i class="fa-solid fa-envelope"></i><pan> {{ __('messages.mohamedgamal7872@gmail.com') }}</span></br>
      <i class="fa-solid fa-location-dot"></i><pan> {{ __('messages.Beni-Suef, Egypt') }}</span></br>
      <div class="social">
      <a href="https://www.facebook.com/profile.php?id=100022184404306" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://wa.link/7f3bwo" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
      <a href="https://github.com/mohamed913" target="_blank"><i class="fa-brands fa-github"></i></a>
      <a href="https://www.linkedin.com/in/mohamed-gamal-67aa621a1/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
      </div>
      </div>

  </div>
  <div class="copy_right">
    {{ __('messages.Copyright') }}  ©<script>document.write(new Date().getFullYear());</script>
     {{ __('messages.All rights reserved') }} | {{ __('messages.Abo-Hozifa') }}
      </div>
