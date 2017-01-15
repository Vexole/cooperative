@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Download</h3>

			<hr>

				{!! Form::open(['route' => 'downloads.store', 'files' => 'true']) !!}
				
				{{ Form::label('file', "Add File : ") }}
				{!!	Form::file('file')	!!}
				{!!	Form::token()	!!}


				<br>

				{{ Form::label('description', "Description : ") }}
				{{	Form::text('description', null, ['class' => 'form-control'])	}}

				<br>

				{{	Form::submit('Add Download', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection