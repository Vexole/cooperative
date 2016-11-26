@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Menu</h3>

			<hr>

				{!! Form::open(['route' => 'menus.store']) !!}
    
				{{ Form::label('menu_name', "Name : ") }}
				{{	Form::text('menu_name', null, ['class' => 'form-control'])	}}

				<br>

				{{	Form::submit('Add Menu', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection