
<header>
         <div class="line">
            <div class="box">
               <div class="s-6 l-2">
                  <img src="img/logo.png">
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
               <div class="hide-s hide-m l-2">
                  <i class="icon-facebook_circle icon2x right padding"></i>
               </div>
            </nav>
         </div>
      </header>