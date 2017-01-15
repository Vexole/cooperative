@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Saying</h3>

			<hr>
				{!! Form::open(['route' => 'sayings.store', 'files' => 'true']) !!}

				{{ Form::label('quotation', "Quotation : ") }}
				{{	Form::text('quotation', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('name', "Name : ") }}
				{{	Form::text('name', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('rank', "Rank : ") }}
				{{	Form::text('rank', null, ['class' => 'form-control'])	}}

				<br>
				
				{{ Form::label('file', "Image : ") }}
				{!!	Form::file('file')	!!}
				{!!	Form::token()	!!}


				<br>

				{{	Form::submit('Add Slider', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection