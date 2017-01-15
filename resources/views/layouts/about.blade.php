@extends('master')

@section('container')

<div class="line">
		<div class="margin">
			<div class="s-12 m-12 l-12 margin-bottom ">
				@foreach($abouts as $about)
                <div class="box">
                	<img src="uploads/image/{{$about->picture_name}}" width="100%"/><br>
					{{$about->description}}
				</div>
				@endforeach
			</div>
		</div>
	</div>

<div class="line">
		<div class="margin">
			<div class="s-12 m-12 l-12 margin-bottom ">
                <div class="box">
					<center><h2>Board Members</h2></center>
					<hr>
						@foreach($members as $member)
						<div class="s-6 m-4 l-3 margin-bottom">
                     		<div class="box">
                     			<center>
									<img src="/uploads/image/{{$member->picture_name}}" alt=""/><br>
									{{$member->boardmember_name}}<br>
									{{$member->rank}}
								</center>
		                     </div>
        		          </div>
						@endforeach
				</div>
			</div>
		</div>
	</div>

	<div class="line">
		<div class="margin">
			<div class="s-12 m-12 l-12 margin-bottom ">
                <div class="box">
					<center><h2>Management Team</h2></center>
					<hr>
						@foreach($teams as $team)
						<div class="s-6 m-4 l-3 margin-bottom">
                     		<div class="box">
                     			<center>
									<img src="uploads/image/{{$team->picture_name}}" alt=""/><br>
									{{$team->teammember_name}}<br>
									{{$team->rank}}
								</center>
		                     </div>
        		          </div>
						@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection