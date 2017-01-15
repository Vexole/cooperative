@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add Contact</h3>

			<hr>
				{!! Form::open(['route' => 'contacts.store']) !!}

				{{ Form::label('address', "Address : ") }}
				{{	Form::text('address', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('phone', "Phone : ") }}
				{{	Form::number('phone', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('email', "Email : ") }}
				{{	Form::email('email', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('days', "Days : ") }}
				{{	Form::text('days', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('hours', "Hours : ") }}
				{{	Form::text('hours', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('map', "Map : ") }}
				{{	Form::text('map', null, ['class' => 'form-control'])	}}

				<br>
				

				{{	Form::submit('Save Contact', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection