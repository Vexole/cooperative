@extends('master')

@section('container')

<div class="line">
	<div class="margin">
		<div class="s-12 m-7 l-8 margin-bottom"  style="height:640px;">
            <div class="box"  style="height:640px;">
          		<h2>{{$new->news_title}}</h3>
          			<small>Posted On: {{$new->created_at}}</small>
          		<hr>

          		{{$new->news_body}}
            </div>
        </div>

       @include('news.sidebar')
	</div>	
</div>

@endsection