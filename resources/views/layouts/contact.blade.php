@extends('master')

@section('container')
	
	<div class="line">
		<div class="margin">
			<div class="s-12 m-6 l-6 margin-bottom">
                <div class="box" style="height:450px">
                    <h2>Contact Details</h2>
                    <hr>
                    @foreach ($contacts as $contact)
                 
			       	<i class="icon-home">&nbsp;</i>
			        Contact Address:  {{$contact->address}}
			        
			       <br>
					<br>
			        <p>
			        	<i class="icon-sli-call-out">&nbsp;</i>
			            <abbr title="Phone"></abbr> Contact Number:  {{$contact->phone}}
			        </p>

			        <br>

			            <p>
			            	<i class="icon-mail"> &nbsp; </i>
			              	<abbr title="Email"></abbr> Email Address: <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
			          </p>

			          <br>

			        <p>
			        	<i class="icon-sli-briefcase"></i>
			            <abbr title="Days"></abbr>Opening Days: {{$contact->days}}
			        </p>
			        <br>

			           <p>
			        	<i class="icon-clock"> &nbsp;</i>
			            <abbr title="Hours"></abbr> Opening Hour: {{$contact->hours}}
			        </p>
			        <br>


			    </div>
	  		</div>                
	        <div class="s-12 m-6 l-6 margin-bottom">
            	<?="$contact->map"?>
            </div>
            @endforeach
		</div>
	</div>

@endsection