@extends('admin')

@section('contain')

<center>
	<div class="row">
		<div class="col-md-6">
			<h1>All News</h1>
		</div>

		<div class="col-md-2">
			<a href="{{	route('news.create')	}}" class="btn btn-lg btn-block btn-primary btn-spacing">Add New News</a>
		</div>
		
		<div class="col-md-8 col-md-offset-2">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table">
				<thead>
					<th><center>#</center></th>
					<th><center>Title</center></th>
					<th><center>Body</center></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($news as $new)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center><p align="justify">	{{	$new->news_title	}}	</p></center></td>
						<td><center><p align="justify">	{{	$new->news_body	}}	</p></center></td>
						<td>
							{!!	Html::linkRoute('news.edit', 'Edit', array($new->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
						<td>
							{!!	Form::open(['route' => ['news.destroy', $new->id], 'method' => 'DELETE'])	!!}
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
