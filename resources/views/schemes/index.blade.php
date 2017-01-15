@extends('admin')

@section('contain')

<center>
	<div class="row">
		<div class="col-md-6">
			<h1>All Schemes</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('schemes.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Scheme</a>
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
					<th><center>Title</center></th>
					<th><center>Body</center></th>
					<th><center>Interest Rate</center></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($schemes as $scheme)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center>{{	$scheme->scheme_name	}}	</center></td>
						<td><center>{{	$scheme->scheme_body	}}	</center></td>
						<td><center>{{	$scheme->interest	}}	</center></td>
						<td>
							{!!	Html::linkRoute('schemes.edit', 'Edit', array($scheme->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
						<td>
							{!!	Form::open(['route' => ['schemes.destroy', $scheme->id], 'method' => 'DELETE'])	!!}
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
