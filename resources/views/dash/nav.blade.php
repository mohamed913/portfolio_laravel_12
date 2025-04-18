<nav>

    <i id="menubar" class="fa-solid fa-bars"></i>
    
    
    
    <div id="links" class="links">
        <img id="profile_photo" class="myimg" src="{{URL::asset('assets/imgs/mohamed4.jpg')}}" alt="this is the picture of abo hozifa"
    title="this is the picture of abo hozifa" />
    <div id="mysettings" class="settings">
        <ul>
            <li><i class="fa-solid fa-gear"></i><a href="">{{ __('messages.Settings') }}</a></li>
            <li><i class="fa-solid fa-right-from-bracket"></i>
                
                {{-- <a href="">logout</a> --}}
                     <!-- Authentication --><form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('messages.Log Out') }}
                     </a>
                    </form>
            
            
            </li>
        </ul>
    
    </div>
    
    </div>
    </nav>