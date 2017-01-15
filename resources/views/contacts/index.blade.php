@extends('admin')

@section('contain')

<center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h1>Contact</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('contacts.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add Contact</a>
		</div>
		
		
		<div class="col-md-8">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<thead>
					<th><center>#</center></th>
					<th><center>Address</center></th>
					<th><center>Phone</center></th>
					<th><center>Email</center></th>
					<th><center>Days</center></th>
					<th><center>Hour</center></th>
					<th><center>Map</center></th>
					<th></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($contacts as $contact)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center><p align="justify">	{{	$contact->address	}}	</p></center></td>
						<td><center><p align="justify">	{{	$contact->phone	}}	</p></center></td>
						<td><center><p align="justify">	{{	$contact->email	}}	</p></center></td>
						<td><center><p align="justify">	{{	$contact->days	}}	</p></center></td>
						<td><center><p align="justify">	{{	$contact->hours	}}	</p></center></td>
						<td><center><p align="justify">	{{	$contact->map	}}	</p></center></td>
					
						<td>
							{!!	Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'DELETE'])	!!}
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
