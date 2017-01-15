@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add Details</h3>

			<hr>
				{!! Form::open(['route' => 'overalls.store', 'files' => 'true']) !!}

				{{ Form::label('credit', "Credit : ") }}
				{{	Form::text('credit', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('company', "Company : ") }}
				{{	Form::text('company', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('year', "Year : ") }}
				{{	Form::text('year', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('facebook_link', "Facebook Link : ") }}
				{{	Form::text('facebook_link', null, ['class' => 'form-control'])	}}

				<br>
				
				{{ Form::label('file', "Logo : ") }}
				{!!	Form::file('file')	!!}
				{!!	Form::token()	!!}


				<br>

				{{	Form::submit('Save Details', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection