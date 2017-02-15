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
      </style>
@endsection

<div class="s-12 m-5 l-4 margin-bottom" >
    <div class="box"  style="height:333px;">
        <h3>News</h3>
            <table>
        @foreach($news as $new)  
          <tr>
            <td><a href="{{route('news.show', $new->id)}}">{{$new->news_title}}</a></td>
          </tr>
        @endforeach       
      </table><br>
      <center><a href="{{route('news.index')}}">View All</a></center>
    </div>

    <div class="box"  style="height:333px;">
        <h3>Notices</h3>
            <table>
        @foreach($notices as $notice)  
          <tr>
            <td><a href="{{route('notices.show', $notice->id)}}">{{$notice->notice_title}}</a></td>
          </tr>
        @endforeach       
      </table><br>
      <center><a href="{{route('notices.index')}}">View All</a></center>
    </div> 

    <div class="box"  style="height:333px;">
        <h3>Schemes</h3>
            <table>
        @foreach($schemes as $scheme)  
          <tr>
            <td><a href="{{route('schemes.show', $scheme->id)}}">{{$scheme->scheme_name}}</a></td>
          </tr>
        @endforeach       
      </table><br>
      <center><a href="{{route('schemes.index')}}">View All</a></center>
    </div>   
</div>