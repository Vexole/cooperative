@extends('master')

@section('container')

<div class="line">
	<div class="margin">
		<div class="s-12 m-7 l-8 margin-bottom"  style="height:800px;">
            <div class="box"  style="height:800px;">
          		@foreach($notices as $notice)
          			<h3><a href="{{ route('notices.show', $notice->id) }}">{{$notice->notice_title}}</a></h3>
          			<small>Posted On: {{$notice->created_at}}</small><hr>
          		@endforeach 
              <center>{{$notices->links()}}</center>
            </div>
        </div>

        @include('notices.sidebar')
	</div>	
</div>

@endsection