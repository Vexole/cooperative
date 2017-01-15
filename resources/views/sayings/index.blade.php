@extends('admin')

@section('contain')

<center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h1>All Sayings</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('sayings.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Saying</a>
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
					<th><center>Quotation</center></th>
					<th><center>Name</center></th>
					<th><center>Rank</center></th>
					<th><center>Image</center></th>
					<th></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($sayings as $saying)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center><p align="justify">	{{	$saying->quotation	}}	</p></center></td>
						<td><center><p align="justify">	{{	$saying->name	}}	</p></center></td>
						<td><center><p align="justify">	{{	$saying->rank	}}	</p></center></td>
						<td><center><p align="justify">	{{	$saying->image_name	}}	</p></center></td>
					
						<td>
							{!!	Html::linkRoute('sayings.edit', 'Edit', array($saying->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
						<td>
							{!!	Form::open(['route' => ['sayings.destroy', $saying->id], 'method' => 'DELETE'])	!!}
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
