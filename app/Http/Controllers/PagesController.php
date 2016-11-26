<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

class PagesController extends Controller
{
    public function getIndex(){
    	$menus = Menu::all(); 
    	return view('layouts.index')->withMenus($menus);
    }
}
