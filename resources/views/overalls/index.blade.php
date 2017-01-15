@extends('admin')

@section('contain')

<center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h1>Overalls</h1>
		</div>


		<div class="col-md-2">
			<a href="{{	route('overalls.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add Details</a>
		</div>

		<br>

		<div class="col-md-8 col-md-offset-2">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<table class="table">
				<thead>
					<th><center>#</center></th>
					<th><center>Credit</center></th>
					<th><center>Company</center></th>
					<th><center>Year</center></th>
					<th><center>Logo</center></th>
					<th><center>Facebook</center></th>
					<th></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($overalls as $overall)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center><p align="justify">	{{	$overall->credit	}}	</p></center></td>
						<td><center><p align="justify">	{{	$overall->company	}}	</p></center></td>
						<td><center><p align="justify">	{{	$overall->year	}}	</p></center></td>
						<td><center><p align="justify">	{{	$overall->logo_name	}}	</p></center></td>
						<td><center><p align="justify">	{{	$overall->facebook_link	}}	</p></center></td>
					
						<td>
							{!!	Html::linkRoute('overalls.edit', 'Edit', array($overall->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
						<td>
							{!!	Form::open(['route' => ['overalls.destroy', $overall->id], 'method' => 'DELETE'])	!!}
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
