@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <ul class="nav nav-pills">
            <li role="presentation" class="{{ Request::is('home') ? "active":""}}"><a href="/home">Home</a></li>
            <li role="presentation"  class="{{ Request::is('menus') ? "active":""}}"><a href="/menus">Menu</a></li>
   	        <li role="presentation" class="{{ Request::is('submenus') ? "active":""}}"><a href="/submenus">Sub Menu</a></li>
        </ul>
    </div>
</div>



@yield('contain')

@endsection
