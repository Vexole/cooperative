<link rel="stylesheet" href="/css/components.css">
<link rel="stylesheet" href="/css/icons.css">
<link rel="stylesheet" href="/css/responsee.css">
<link rel="stylesheet" href="/css/owl.carousel.css">
<link rel="stylesheet" href="/css/owl.theme.css"> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<style type="text/css">
      .sidenav{
         float: right;
      }
</style>

@if(Auth::guest())
<style type="text/css">
body{
      background: #e3e3e3;     
} 
</style>
@else
	<style type="text/css">
body{
      background: red;     
} 
</style>
@endif