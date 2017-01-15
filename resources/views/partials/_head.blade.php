<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>
      	@foreach($overalls as $overall)
       {{$overall->company}}
        @endforeach
    </title>
   
      @include('partials._style')
        
   </head>
    <body class="size-960">