@extends('admin')

@section('contain')

<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h3>Add New Sub Menu</h3>

			<hr>

				{!! Form::open(['route' => 'submenus.store']) !!}
    
				{{ Form::label('submenu_name', "Sub Menu : ") }}
				{{	Form::text('submenu_name', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('menu_name', "Menu : ") }}
				{{ Form::select('menu_name', $list), ['class' => 'form-control'] }}
				
				<br>
				<br>

				
				{{ Form::label('body_up', "Body Up : ") }}
				{{	Form::text('body_up', null, ['class' => 'form-control'])	}}

				<br>

				{{ Form::label('body_down', "Body Down : ") }}
				{{	Form::text('body_down', null, ['class' => 'form-control'])	}}

				<br>

				{{	Form::submit('Add Sub Menu', array('class' => 'btn btn-success btn-lg btn-block'))	}}


			{!! Form::close() !!}

		</div>
	</div>

@endsection