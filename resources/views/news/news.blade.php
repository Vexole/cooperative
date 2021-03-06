@extends('master')

@section('container')

<div class="line">
	<div class="margin">
		<div class="s-12 m-7 l-8 margin-bottom"  style="height:1000px;">
            <div class="box"  style="height:1000px;">
          		@foreach($news as $new)
          			<h3><a href="{{ route('news.show', $new->id) }}">{{$new->news_title}}</a></h3>
          			<small>Posted On: {{$new->created_at}}</small><hr><hr>
          		@endforeach 
             {{$news->links()}}
            </div>
        </div>

        @include('news.sidebar')
	</div>	
</div>

@endsection