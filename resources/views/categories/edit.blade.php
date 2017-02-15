@extends('admin')

@section('contain')
<br>
<div class="row">

		{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT'])	!!}

		<div class="col-md-6 col-md-offset-1">
			
			{{	Form::label('title', 'Title:')}}
			{{	Form::text('title', null, ["class" => 'form-control', 'disabled'])}}

			<br>

			{{	Form::label('body_up', 'Body Up:')}}
			{{	Form::text('body_up', null, ["class" => 'form-control'])}}

			<br>

			{{	Form::label('body_down', 'Body Down:')}}
			{{	Form::text('body_down', null, ["class" => 'form-control'])}}

			<br>


		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{	date('M j, Y h:i a', strtotime($category->created_at))	}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Updated At:</dt> 
					<dd>{{	date('M j, Y h:i a', strtotime($category->updated_at))	}}</dd>
				</dl>

				<hr>

				<div class="row">
					<div class="row-sm-6">
						{!!	Form::submit('Save Change', ['class' => 'btn btn-success btn-block'])	!!}
					</div>

					<div class="row-sm-6">
						{!!	Html::linkRoute('categories.index', 'Cancel', [], array('class' => 'btn btn-danger btn-block'))	!!}
					</div>
				</div>

			</div>
		</div>

		{!!	Form::close()	!!}
	</div>

@endsection