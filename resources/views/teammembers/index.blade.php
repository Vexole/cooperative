@extends('admin')

@section('contain')

<center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h1>Team Member Details</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('teammembers.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Teammember</a>
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
					<th><center>Member Name</center></th>
					<th><center>Priority</center></th>
					<th><center>Rank</center></th>
					<th><center>Picture Name</center></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($teammembers as $teammember)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>	{{	$teammember->teammember_name	}}	</center></td>
						<td><center>	{{	$teammember->priority	}}	</center></td>
						<td><center>	{{	$teammember->rank	}}	</center></td>
						<td><center>	{{	$teammember->picture_name	}}	</center></td>
		
						<td>
							{!!	Form::open(['route' => ['teammembers.destroy', $teammember->id], 'method' => 'DELETE'])	!!}
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
