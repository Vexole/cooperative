@extends('master')

@section('container')
	<section>
        @include('partials._carousel')

         <!-- HOME PAGE BLOCK -->      
         <div class="line">
            <div class="margin">
               <div class="s-12 m-6 l-4 margin-bottom">
                  <div class="box">
                     <h2>About</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
               <div class="s-12 m-6 l-4 margin-bottom">
                  <div class="box">
                     <h2>Company</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
               <div class="s-12 m-12 l-4 margin-bottom">
                  <div class="box">
                     <h2>Services</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="line">
            <div class="margin">
               <div class="s-12 m-6 l-4 margin-bottom">
                  <div class="box">
                     <h2>About</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
               <div class="s-12 m-6 l-4 margin-bottom">
                  <div class="box">
                     <h2>Company</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
               <div class="s-12 m-12 l-4 margin-bottom">
                  <div class="box">
                     <h2>Services</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
            </div>
         </div>

         @include('partials._imagecarousel')

      </section>

             <!-- ASIDE NAV AND CONTENT -->
         <div class="line">
            <div class="box margin-bottom">
               <div class="margin">
                  <!-- CONTENT -->
                  <article class="sidenav s-12 m-7 l-8">
                     <h1>Content</h1>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                        lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                     <h3>Sub Header</h3>
                     <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
                        eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
                        delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue 
                        nihil imperdiet doming id quod mazim placerat facer possim assum. 
                     </p>
                  </article>
                  <!-- ASIDE NAV -->
                  @include('partials._sidenav')
      @endsection