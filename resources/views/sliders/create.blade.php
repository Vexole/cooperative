@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Notice</h3>

			<hr>

				{!! Form::open(['route' => 'sliders.store', 'files' => 'true']) !!}
				
				{{ Form::label('file', "Slider Image : ") }}
				{!!	Form::file('file')	!!}
				{!!	Form::token()	!!}


				<br>

				{{ Form::label('priority', "Priority : ") }}
				{{	Form::text('priority', null, ['class' => 'form-control'])	}}

				<br>

				{{	Form::submit('Add Slider', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection