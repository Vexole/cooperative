@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Notice</h3>

			<hr>

				{!! Form::open(['route' => 'notices.store']) !!}
    
				{{ Form::label('notice_title', "Title : ") }}
				{{	Form::text('notice_title', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('notice_body', "Body : ") }}
				{{	Form::text('notice_body', null, ['class' => 'form-control'])	}}

				<br>

				{{	Form::submit('Add Notice', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection