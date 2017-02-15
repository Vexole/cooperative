@extends('admin')

@section('contain')

<center>
	<div class="row">
		<div class="col-md-6">
			<h1>New Menus</h1>
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
					<th><center>Body Up</center></th>
					<th><center>Body Down</center></th>
					<th></th>
				</thead>
<?php $i=1; ?>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td><center>	{{$i++}}	</center></td>
						<td><center><p align="justify">	{{	$category->title	}}	</p></center></td>
						<td><center><p align="justify">	{{	$category->body_up	}}	</p></center></td>
						<td><center><p align="justify">	{{	$category->body_down	}}	</p></center></td>
						<td>
							{!!	Html::linkRoute('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-default btn-block'))	!!}
						</td>
					</tr>							
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</center>

@endsection
