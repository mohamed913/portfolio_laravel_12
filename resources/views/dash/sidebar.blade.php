<div id="sidebar" class="sidebar">
    <div id="sidelinks" class="sidelinks">
        <ul id="sidelinksul">
          <li>
            <div id="mainsidebar_home" class="mainsidebar">
                <span><i class="fa-solid fa-gear"></i><a href="#home">{{ __('messages.Index') }}</a></span>  <span><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-caret-down"></i></span>
            </div>
            <div id="subsidebar_home" class="subsidebar">
                <ul>
                    <li><a href="{{route('dash.index')}}">{{ __('messages.Dash') }}</a></li>
                    <li><a href="/">{{ __('messages.Site') }}</a></li>
                </ul>
            </div>
         </li>
         <li>
            <div id="mainsidebar_contact" class="mainsidebar">
                <span><i class="fa-solid fa-gear"></i><a href="#contact">{{ __('messages.Messages') }}</a></span>  <span><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-caret-down"></i></span>
            </div>
            <div id="subsidebar_contact" class="subsidebar">
                <ul>
                    <li><a href="{{route('messages.index')}}">{{ __('messages.Index') }}</a></li>
                    <li><a href="{{route('messages.create')}}">{{ __('messages.Create') }}</a></li>
                </ul>
            </div>
         </li>
   
        </ul>
      </div>

</div>