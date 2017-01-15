@extends('master')


@section('container')

<div class="line">
	<div class="box">
		<div class="margin">
			<table>
				<tr>
					<th>Description</th>
					<th>Download</th>
				</tr>
				@foreach($downloads as $download)
				<tr>
					<td>{{$download->description}}</td>
					<td><a href="../file/{{$download->file_name}}"}}>Click to Download</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection