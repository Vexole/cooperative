@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Board Member</h3>

			<hr>
				{!! Form::open(['route' => 'boardmembers.store', 'files' => 'true']) !!}

				{{ Form::label('boardmember_name', "Boardmember Name : ") }}
				{{	Form::text('boardmember_name', null, ['class' => 'form-control'])	}}

			<br>

				{{ Form::label('rank', "Rank : ") }}
				{{	Form::text('rank', null, ['class' => 'form-control'])	}}

			<br>

				{{ Form::label('priority', "Priority : ") }}
				{{	Form::number('priority', null, ['class' => 'form-control'])	}}

			<br>	

				{{ Form::label('file', "Boardmember Photo : ") }}
				{!!	Form::file('file')	!!}
				{!!	Form::token()	!!}


				<br>

				{{	Form::submit('Add Member', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection