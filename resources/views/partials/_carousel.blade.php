 <!-- CAROUSEL -->  
         <div class="line">
            <div id="owl-demo" class="owl-carousel owl-theme  margin-bottom">
            	@foreach($sliders as $slider)
            		<div class="item"><img src="/uploads/image/{{$slider->slider_name}}" alt=""  style="height:400px;"></div>
            	@endforeach
            </div>
         </div>