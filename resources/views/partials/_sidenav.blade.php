<!-- ASIDE NAV -->
   <div class="s-12 m-5 l-4">
      <h3>Navigation</h3>
            <div class="aside-nav">
                   <ul>

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
            </div>
         </div>
      </div>
  </div>