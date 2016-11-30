
<header>
         <div class="line">
            <div class="box">
               <div class="s-6 l-2">
                  <img src="/img/logo.png">
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
                    @else
                     <li><a href="/{{strtolower($menu->menu_name)}}s">{{$menu->menu_name}}</a>
                    @endif

                    @if(count($menu->submenus))
                       <ul>
                           @foreach($menu->submenus as $submenu)
                              <li><a href="/{{$submenu->submenu_name}}">{{$submenu->submenu_name}}</a></li>
                           @endforeach
                        </ul>
                    @endif

                     </li>
                  @endforeach

                  </ul>
               </div>
               <div class="hide-s hide-m l-2">
                  <i class="icon-facebook_circle icon2x right padding"></i>
               </div>
            </nav>
         </div>
      </header>