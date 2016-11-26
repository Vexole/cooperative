@extends('admin')

@section('contain')
<br>

	<div class="row">
		{!!	Form::model($submenu, ['route' => ['submenus.update', $submenu->id], 'method' => 'PUT'])	!!}

		<div class="col-md-6 col-md-offset-1">
			
			{{	Form::label('submenu_name', 'Sub Menu Name:')}}
			{{	Form::text('submenu_name', null, ["class" => 'form-control'])}}

			<br>


			{{	Form::label('menu_id', 'Menu Name:')}}
			{{ Form::select('menu_name', $list), ['class' => 'form-control'] }}

			<br>

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{	date('M j, Y h:i a', strtotime($submenu->created_at))	}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Updated At:</dt> 
					<dd>{{	date('M j, Y h:i a', strtotime($submenu->updated_at))	}}</dd>
				</dl>

				<hr>

				<div class="row">
					<div class="row-sm-6">
						{!!	Form::submit('Save Change', ['class' => 'btn btn-success btn-block'])	!!}
					</div>

					<div class="row-sm-6">
						{!!	Html::linkRoute('submenus.index', 'Cancel', [], array('class' => 'btn btn-danger btn-block'))	!!}
					</div>
				</div>

			</div>
		</div>

		{!!	Form::close()	!!}
	</div>

@endsection