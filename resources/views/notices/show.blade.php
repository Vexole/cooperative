@extends('master')

@section('container')

<div class="line">
	<div class="margin">
		<div class="s-12 m-7 l-8 margin-bottom"  style="height:800px;">
            <div class="box"  style="height:800px;">
          		<h2>{{$notice->notice_title}}</h3>
          			<small>Posted On: {{$notice->created_at}}</small>
          		<hr>

          		{{$notice->notice_body}}
            </div>
        </div>

        @include('notices.sidebar')
	</div>	
</div>

@endsection