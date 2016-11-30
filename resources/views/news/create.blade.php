@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New News</h3>

			<hr>

				{!! Form::open(['route' => 'news.store']) !!}
    
				{{ Form::label('news_title', "Title : ") }}
				{{	Form::text('news_title', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('news_body', "Body : ") }}
				{{	Form::text('news_body', null, ['class' => 'form-control'])	}}

				<br>

				{{	Form::submit('Add News', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection