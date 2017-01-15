@extends('admin')

@section('contain')

<center>
	<div class="row">
		<div class="col-md-6">
			<h1>All Sliders</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('sliders.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Slider</a>
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
					<th><center>Slider Name</center></th>
					<th><center>Priority</center></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($sliders as $slider)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>	{{	$slider->slider_name	}}	</p></center></td>
						<td><center>	{{	$slider->priority	}}	</p></center></td>
					
						<td>
							{!!	Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'DELETE'])	!!}
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
