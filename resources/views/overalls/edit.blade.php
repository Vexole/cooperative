@extends('admin')

@section('contain')
<br>
<div class="row">

		{!! Form::model($overall, ['route' => ['overalls.update', $overall->id], 'method' => 'PUT'])	!!}

		<div class="col-md-6 col-md-offset-1">
			
			{{	Form::label('credit', 'Credit:')}}
			{{	Form::text('credit', null, ["class" => 'form-control'])}}

			<br>

			{{	Form::label('company', 'Company Name: ')}}
			{{	Form::text('company', null, ["class" => 'form-control'])}}

			<br>

			{{	Form::label('year', 'Year: ')}}
			{{	Form::number('year', null, ["class" => 'form-control'])}}

			<br>

			{{	Form::label('facebook_link', 'Facebook Link: ')}}
			{{	Form::text('facebook_link', null, ["class" => 'form-control'])}}

		<br>

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{	date('M j, Y h:i a', strtotime($overall->created_at))	}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Updated At:</dt> 
					<dd>{{	date('M j, Y h:i a', strtotime($overall->updated_at))	}}</dd>
				</dl>

				<hr>

				<div class="row">
					<div class="row-sm-6">
						{!!	Form::submit('Save Change', ['class' => 'btn btn-success btn-block'])	!!}
					</div>

					<div class="row-sm-6">
						{!!	Html::linkRoute('overalls.index', 'Cancel', [], array('class' => 'btn btn-danger btn-block'))	!!}
					</div>
				</div>

			</div>
		</div>

		{!!	Form::close()	!!}
	</div>

@endsection