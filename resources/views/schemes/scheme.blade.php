@extends('master')

@section('container')

 <div class="line">  
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

 

@endsection