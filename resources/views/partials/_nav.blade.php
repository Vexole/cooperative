
<header>
         <div class="line">
          @foreach($overalls as $overall)
            <div class="box">
               <div class="s-12 l-12">
                  <img src="/uploads/image/{{$overall->logo_name}}">
               </div>
            </div>
         </div>
         <!-- TOP NAV -->  
         <div class="line">
            <nav class="margin-bottom">
               <p class="nav-text">Menu</p>
               <div class="top-nav s-12 l-10">
                  <ul class="chevron">

                  @foreach($menus as $menu)
                    @if($menu->menu_name == "Home")
                     <li><a href="/">{{$menu->menu_name}}</a>
                    @elseif($menu->menu_name == "Contact" || $menu->menu_name == "About" || $menu->menu_name == "News")
                     <li><a href="/{{strtolower($menu->menu_name)}}">{{$menu->menu_name}}</a>
                    @elseif($menu->menu_name == "Notice" || $menu->menu_name == "Scheme")
                     <li><a href="/{{strtolower($menu->menu_name)}}s">{{$menu->menu_name}}</a>
                    @else
                     <li><a href="/cat/{{$menu->menu_name}}">{{$menu->menu_name}}</a>
                  
                    @endif

                    @if(count($menu->submenus))
                       <ul>
                           @foreach($menu->submenus as $submenu)
                              <li><a href="/cat/{{$submenu->submenu_name}}">{{$submenu->submenu_name}}</a></li>
                           @endforeach
                        </ul>
                    @endif

                     </li>
                  @endforeach
                  </ul>
               </div>
               <div class="hide-s hide-m l-2">
                  <a href="{{$overall->facebook_link}}"><i class="icon-facebook_circle icon2x right padding"></i></a>
               </div>
            @endforeach
            </nav>
         </div>
      </header>