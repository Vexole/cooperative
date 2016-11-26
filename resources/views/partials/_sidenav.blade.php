<!-- ASIDE NAV -->
   <div class="s-12 m-5 l-4">
      <h3>Navigation</h3>
            <div class="aside-nav">
                   <ul>

                  @foreach($menus as $menu)
                     <li><a>{{$menu->menu_name}}</a>
                    
                    @if(count($menu->submenus))
                       <ul>
                           @foreach($menu->submenus as $submenu)
                              <li><a>{{$submenu->submenu_name}}</a></li>
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