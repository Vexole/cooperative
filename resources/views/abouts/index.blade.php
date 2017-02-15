@extends('admin')

@section('contain')

<center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h1>About Details</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('abouts.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add About Details</a>
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
					<th><center>File Name</center></th>
					<th><center>Description</center></th>
					<th></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($abouts as $about)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>	{{	$about->picture_name	}}	</center></td>
						<td><center><p align="justify">	{{	$about->description	}}	</p></center></td>
		
						<td>
							{!!	Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'DELETE'])	!!}
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
