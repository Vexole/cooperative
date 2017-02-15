@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add About Details</h3>

			<hr>
				{!! Form::open(['route' => 'abouts.store', 'files' => 'true']) !!}

				{{ Form::label('description', "Description : ") }}
				{{	Form::text('description', null, ['class' => 'form-control'])	}}

			<br>				
				{{ Form::label('file', "About Photo : ") }}
				{!!	Form::file('file')	!!}
				{!!	Form::token()	!!}


				<br>

				{{	Form::submit('Add Details', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection