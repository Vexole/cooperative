@extends('admin')

@section('contain')

<center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h1>All QuickLinks</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('quicklinks.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Quicklink</a>
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
					<th><center>Link</center></th>
					<th><center>Name</center></th>
					<th><center>Priority</center></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($quicklinks as $quicklink)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>	{{	$quicklink->link	}}	</center></td>
						<td><center>	{{	$quicklink->description	}}	</center></td>
						<td><center>	{{	$quicklink->priority	}}	</center></td>
						<td>
							{!!	Form::open(['route' => ['quicklinks.destroy', $quicklink->id], 'method' => 'DELETE'])	!!}
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
