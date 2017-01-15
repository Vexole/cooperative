@extends('master')

@section('container')

<div class="line">
	<div class="margin">
		<div class="s-12 m-7 l-8 margin-bottom"  style="height:640px;">
            <div class="box"  style="height:640px;">
          		@foreach($news as $new)
          			<h3><a href="{{ route('news.show', $new->id) }}">{{$new->news_title}}</a></h3>
          			<small>Posted On: {{$new->created_at}}</small><hr>
          		@endforeach 
             {{$news->links()}}
            </div>
        </div>

        @include('news.sidebar')
	</div>	
</div>

@endsection