@extends('master')

@section('container')

<div class="line">
	<div class="margin">
		<div class="s-12 m-7 l-8 margin-bottom"  style="height:640px;">
            <div class="box"  style="height:640px;">
                <h2>{{$scheme->scheme_name}}</h3>
                    <small>Category: {{$scheme->service->type}}</small>
                <hr>

                <table>
                    <tr>
                        <td>Interest:</td>
                        <td> {{$scheme->interest}}</td>
                    </tr>

                     <tr>
                        <td>Description:</td>
                        <td> {{$scheme->scheme_body}}</td>
                    </tr>
                </table>
                
            </div>
        </div>
            

@include('schemes.sidebar')
        </div>
</div>
</div>

@endsection