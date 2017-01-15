@extends('master')

@section('style')

   <link rel="stylesheet" href="/css/animate.css"> 
   <link rel="stylesheet" href="/css/font-awesome.css"> 

@endsection

@section('container')
	<section>
        @include('partials._carousel')


         <!-- HOME PAGE BLOCK -->  
         <div class="line">
               <h2>Services</h2>    
            <div class="margin">

               @foreach ($services as $service)
                  <div class="s-12 m-6 l-6 margin-bottom">
                     <div class="box" style="height:480px">
                        <h4>{{$service->type}}</h4>

                        <table>
                           @foreach($service->schemes as $scheme)
                              <tr>
                                 <td><a href="{{route('schemes.show', $scheme->id)}}">{{$scheme->scheme_name}}</a></td>
                              </tr>
                           @endforeach
                        </table> 
                     </div>
                  </div>
               @endforeach

            </div>
         </div>


<br>

        <div class="line">
               <h2><center>Some Words</center></h2>    
            <div class="margin">
               
               @foreach ($sayings as $saying)
                  <div class="s-12 m-6 l-6 margin-bottom">
                     <div class="box">
                        <table height="200px;" style="border:none;">
                           <td width="25%"> 
                              <img src="/uploads/image/{{$saying->image_name}}"/>
                              <p><b>{{$saying->name}}</b></p>
                              <small>{{$saying->rank}}</small>
                           </td>
                           <td>
                              <h5>"{{$saying->quotation}}"</h5>
                            </td>
                        </table>
                     </div>
                  </div>
               @endforeach
   
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

      @section('script')

      <script type="text/javascript" src="/js/wow.js"></script>

      @endsection