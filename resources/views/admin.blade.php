@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <ul class="nav nav-pills">
            <li role="presentation" class="{{ Request::is('home') ? "active":""}}"><a href="/home">Home</a></li>
            <li role="presentation"  class="{{ Request::is('menus') ? "active":""}}"><a href="/menus">Menu</a></li>
   	        <li role="presentation" class="{{ Request::is('submenus') ? "active":""}}"><a href="/submenus">Sub Menu</a></li>
   	        <li role="presentation" class="{{ Request::is('sliders') ? "active":""}}"><a href="/sliders">Sliders</a></li>
   	        <li role="presentation" class="{{ Request::is('news') ? "active":""}}"><a href="/news">News</a></li>
            <li role="presentation" class="{{ Request::is('notices') ? "active":""}}"><a href="/notices">Notice</a></li>
            <li role="presentation" class="{{ Request::is('schemes') ? "active":""}}"><a href="/schemes">Scheme</a></li>
            <li role="presentation" class="{{ Request::is('sayings') ? "active":""}}"><a href="/sayings">Sayings</a></li>
            <li role="presentation" class="{{ Request::is('contacts') ? "active":""}}"><a href="/contacts">Contact</a></li>
            <li role="presentation" class="{{ Request::is('quicklinks') ? "active":""}}"><a href="/quicklinks">Quicklinks</a></li>
            <li role="presentation" class="{{ Request::is('overalls') ? "active":""}}"><a href="/overalls">Overalls</a></li>
   	        <li role="presentation" class="{{ Request::is('downloads') ? "active":""}}"><a href="/downloads">Downloads</a></li>
        </ul>
    </div>
</div>



@yield('contain')

@endsection
