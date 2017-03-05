@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Scheme</h3>

			<hr>

				{!! Form::open(['route' => 'schemes.store']) !!}
    
				{{ Form::label('service_id', "Type : ") }}
				{{ Form::select('service_id', $list), ['class' => 'form-control'] }}
				
				<br>
				<br>

				{{ Form::label('scheme_name', "Title : ") }}
				{{	Form::text('scheme_name', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('scheme_body', "Body : ") }}
				{{	Form::text('scheme_body', null, ['class' => 'form-control'])	}}
			
				<br>

				{{ Form::label('interest', "Interest : ") }}
				{{	Form::text('interest', null, ['class' => 'form-control'])	}}
			
				<br>

				{{	Form::submit('Add Scheme', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection