<div class="line">
	<div class="box">
		<div class="margin">
			<div class="s-12 m-4 l-4 margin-bottom ">
                <div class="box">
                	<center><h5><ul>Quick Links</ul></h5></center>
                	<table>
                	@foreach($quicklinks as $quicklink)
                	<tr>
                		<td><a href="{{$quicklink->link}}">{{$quicklink->description}}</a></td>
                	</tr>
                	@endforeach
                </table>
                </div>
            </div>

            <div class="s-12 m-4 l-4 margin-bottom ">
                <div class="box">
					<h6>Download| <a href="{{route('download')}}">View All</a></h6>
					<table style="border:none;">
					@foreach($downloads as $download)
						<tr>
							<td><a href="/uploads/file/{{$download->file_name}}">{{$download->description}}</a></td>
						</tr>
					@endforeach
					</table>
                </div>
            </div>

            <div class="s-12 m-4 l-4 margin-bottom ">
                <div class="box">
					<center><h5><ul>Mobile Application</ul></h5>
					<a href="/uploads/file/app.apk"><img src="/uploads/image/mobileapp.jpg" style="margin-top:0px; padding-top:0px;"/></a>
					</center>
                </div>
            </div>
		</div>
	</div>
</div>
<br>