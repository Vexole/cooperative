@extends('admin')

@section('contain')

<center>
	<br>
	<div class="row">
		<div class="col-md-6">
			<h1>Board Member Details</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('boardmembers.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Boardmember</a>
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
					@foreach($boardmembers as $boardmember)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>	{{	$boardmember->boardmember_name	}}	</center></td>
						<td><center>	{{	$boardmember->priority	}}	</center></td>
						<td><center>	{{	$boardmember->rank	}}	</center></td>
						<td><center>	{{	$boardmember->picture_name	}}	</center></td>
		
						<td>
							{!!	Form::open(['route' => ['boardmembers.destroy', $boardmember->id], 'method' => 'DELETE'])	!!}
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
