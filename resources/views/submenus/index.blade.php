@extends('admin')

@section('contain')
<center>
	<div class="row">
		<div class="col-md-6">
			<h1>All Sub Menus</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('submenus.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Sub Menu</a>
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
					<th><center>Associated With</center></th>
					<th></th>
				</thead>
				<?php $i=1; ?>
				<tbody>
					@foreach($submenus as $submenu)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>	{{	$submenu->submenu_name	}}	</center></td>
						<td><center>	{{	$submenu->menu->menu_name	}}	</center></td>
						<td>
							{!!	Html::linkRoute('submenus.edit', 'Edit', array($submenu->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
						<td>
							{!!	Form::open(['route' => ['submenus.destroy', $submenu->id], 'method' => 'DELETE'])	!!}
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