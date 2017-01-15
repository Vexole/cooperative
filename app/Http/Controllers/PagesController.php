<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;
use App\Theme;
use App\Service;
use App\Slider;
use App\Boardmember;
use App\Teammember;
use App\Download;
use App\Quicklink;
use App\Saying;
use App\Contact;
use App\Overall;
use App\About;

class PagesController extends Controller
{
    public function getIndex(){
    	$menus = Menu::all(); 
        $overalls = Overall::all();
        $sayings = Saying::all();
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(4)->get();;
        $sliders = Slider::orderBy('priority', 'asc')->get();
        $services = Service::all();
        $themes = Theme::all();
    	return view('layouts.index')->withOveralls($overalls)->withMenus($menus)->withThemes($themes)->withservices($services)->withSliders($sliders)->withSayings($sayings)->withQuicklinks($quicklinks)->withDownloads($downloads);
    }

     public function getContact(){
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $contacts = Contact::take(1)->get();
    	$menus = Menu::all(); 
        $overalls = Overall::all();
        $quicklinks = Quicklink::all();
        $themes = Theme::all();

    	return view('layouts.contact')->withOveralls($overalls)->withMenus($menus)->withContacts($contacts)->withThemes($themes)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }

    public function getAbout(){
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $overalls = Overall::all();
        $members = Boardmember::orderBy('priority', 'asc')->get();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();;
        $teams = Teammember::orderBy('priority', 'asc')->get();
    	$menus = Menu::all();
        $themes = Theme::all();
        $abouts = About::all();

        return view('layouts.about')->withMenus($menus)->withOveralls($overalls)->withAbouts($abouts)->withThemes($themes)->withMembers($members)->withTeams($teams)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }

     public function getDownload(){
        $downloads = Download::all();
        $overalls = Overall::all();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();;
        $menus = Menu::all();
        $themes = Theme::all();

        return view('layouts.download')->withOveralls($overalls)->withMenus($menus)->withThemes($themes)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }
}
