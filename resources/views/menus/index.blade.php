@extends('admin')

@section('contain')
	<center>
	<div class="row">
		<div class="col-md-6">
			<h1>All Menus</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('menus.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Menu</a>
		</div>
		
		<div class="col-md-8 col-md-offset-2">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<table class="table">
				<thead>
					<th><center>#</center></th>
					<th><center>Name</center></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($menus as $menu)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>	{{	$menu->menu_name	}}	</center></td>
						<td>
							{!!	Html::linkRoute('menus.edit', 'Edit', array($menu->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
						<td>
							{!!	Form::open(['route' => ['menus.destroy', $menu->id], 'method' => 'DELETE'])	!!}
							{!!	Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])	!!}					
							{!!	Form::close()	!!}
						</td>
					</tr>							
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</center>
@endsection