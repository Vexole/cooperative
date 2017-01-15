@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Quicklink</h3>

			<hr>
				{!! Form::open(['route' => 'quicklinks.store']) !!}

				{{ Form::label('link', "Link : ") }}
				{{	Form::text('link', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('description', "Name : ") }}
				{{	Form::text('description', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('priority', "Priority : ") }}
				{{	Form::number('priority', null, ['class' => 'form-control'])	}}

				<br>

				{{	Form::submit('Add Quicklink', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection