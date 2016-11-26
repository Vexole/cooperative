@extends('admin')

@section('contain')
<br>
<div class="row">

		{!! Form::model($menu, ['route' => ['menus.update', $menu->id], 'method' => 'PUT'])	!!}

		<div class="col-md-6 col-md-offset-1">
			
			{{	Form::label('menu_name', 'Menu Name:')}}
			{{	Form::text('menu_name', null, ["class" => 'form-control'])}}

			<br>

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{	date('M j, Y h:i a', strtotime($menu->created_at))	}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Updated At:</dt> 
					<dd>{{	date('M j, Y h:i a', strtotime($menu->updated_at))	}}</dd>
				</dl>

				<hr>

				<div class="row">
					<div class="row-sm-6">
						{!!	Form::submit('Save Change', ['class' => 'btn btn-success btn-block'])	!!}
					</div>

					<div class="row-sm-6">
						{!!	Html::linkRoute('menus.index', 'Cancel', [], array('class' => 'btn btn-danger btn-block'))	!!}
					</div>
				</div>

			</div>
		</div>

		{!!	Form::close()	!!}
	</div>

@endsection