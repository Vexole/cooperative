@section('style')
<style type="text/css">
      .pagination{
        list-style: none !important;
        display: inline-block;
      }

      li{
        display: inline-block;
        text-align: center;
      }

      table{
        margin-top:25px!important;
      }
      </style>
    }
@endsection


<div class="s-12 m-5 l-4 margin-bottom" >
            <div class="box"  style="height:500px;">
              <h3>Schemes</h3>
              <hr>
              <table>
                @foreach($schemes as $scheme)  
                  <tr>
                    <td><a href="{{route('schemes.show', $scheme->id)}}">{{$scheme->scheme_name}}</a></td>
                  </tr>
                @endforeach       
              </table><br>
               <center><a href="{{route('schemes.index')}}">View All</a></center>
            </div>

            <div class="box"  style="height:500px;">
              <h3>News</h3>
              <hr>
           
              <table>
        		    @foreach($news as $new)  
        			   	<tr>
        						<td><a href="{{route('news.show', $new->id)}}">{{$new->news_title}}</a></td>
        					</tr>
        				@endforeach       
        			</table><br>
             <center><a href="{{route('news.index')}}">View All</a></center>
        </div>
</div>