@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Team Member</h3>

			<hr>
				{!! Form::open(['route' => 'teammembers.store', 'files' => 'true']) !!}

				{{ Form::label('teammember_name', "Member Name : ") }}
				{{	Form::text('teammember_name', null, ['class' => 'form-control'])	}}

			<br>

				{{ Form::label('rank', "Rank : ") }}
				{{	Form::text('rank', null, ['class' => 'form-control'])	}}

			<br>

				{{ Form::label('priority', "Priority : ") }}
				{{	Form::number('priority', null, ['class' => 'form-control'])	}}

			<br>	

				{{ Form::label('file', "teammember Photo : ") }}
				{!!	Form::file('file')	!!}
				{!!	Form::token()	!!}


				<br>

				{{	Form::submit('Add Member', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection