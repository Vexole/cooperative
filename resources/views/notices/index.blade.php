@extends('admin')

@section('contain')

<center>
	<div class="row">
		<div class="col-md-6">
			<h1>All Notices</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('notices.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New Notice</a>
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
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($notices as $notice)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center><p align="justify">	{{	$notice->notice_title	}}	</p></center></td>
						<td><center><p align="justify">	{{	$notice->notice_body	}}	</p></center></td>
						<td>
							{!!	Html::linkRoute('notices.edit', 'Edit', array($notice->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
						<td>
							{!!	Form::open(['route' => ['notices.destroy', $notice->id], 'method' => 'DELETE'])	!!}
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
