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
    <div class="box"  style="height:400px;">
        <h1>Schemes</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
    </div>

    <div class="box"  style="height:400px;">
        <h1>Notices</h1>
            <table>
				@foreach($notices as $notice)  
					<tr>
						<td><a href="{{route('notices.show', $notice->id)}}">{{$notice->notice_title}}</a></td>
					</tr>
				@endforeach       
			</table>
    </div>
    
</div>