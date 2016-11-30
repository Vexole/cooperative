<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;
use App\News;

class PagesController extends Controller
{
    public function getIndex(){
    	$menus = Menu::all(); 
    	return view('layouts.index')->withMenus($menus);
    }

     public function getContact(){
    	$menus = Menu::all(); 
    	return view('layouts.contact')->withMenus($menus);
    }

    public function getABout(){
    	$menus = Menu::all();
        return view('layouts.about')->withMenus($menus);
    }
}
