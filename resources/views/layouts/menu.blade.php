@extends('master')

@section('container')

<div class="line">
	<div class="margin">
		<div class="s-12 m-7 l-8 margin-bottom"  style="height:1000px;">
            <div class="box" style="height:1000px;">
            	@foreach($category as $cat)
          		<h2>{{$cat->title}}</h2>
          		<hr>

          		{{$cat->body_up}}

          		<br><br>

          		{{$cat->body_down}}
          		@endforeach
            </div>
        </div>

        @include('layouts.sidebar')
	</div>	
</div>

@endsection