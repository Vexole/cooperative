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
use App\News;
use App\Notice;
use App\Scheme;
use App\Category;

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
        $categories = Category::all();
    	return view('layouts.index')->withCategories($categories)->withOveralls($overalls)->withMenus($menus)->withThemes($themes)->withservices($services)->withSliders($sliders)->withSayings($sayings)->withQuicklinks($quicklinks)->withDownloads($downloads);
    }

     public function getContact(){
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $contacts = Contact::take(1)->get();
    	$menus = Menu::all(); 
        $overalls = Overall::all();
        $quicklinks = Quicklink::all();
        $categories = Category::all();
        $themes = Theme::all();

    	return view('layouts.contact')->withCategories($categories)->withOveralls($overalls)->withMenus($menus)->withContacts($contacts)->withThemes($themes)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }

    public function getAbout(){
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $overalls = Overall::all();
        $categories = Category::all();
        $members = Boardmember::orderBy('priority', 'asc')->get();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();;
        $teams = Teammember::orderBy('priority', 'asc')->get();
    	$menus = Menu::all();
        $themes = Theme::all();
        $abouts = About::all();

        return view('layouts.about')->withCategories($categories)->withMenus($menus)->withOveralls($overalls)->withAbouts($abouts)->withThemes($themes)->withMembers($members)->withTeams($teams)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }

     public function getDownload(){
        $categories = Category::all();
        $downloads = Download::all();
        $overalls = Overall::all();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();;
        $menus = Menu::all();
        $themes = Theme::all();

        return view('layouts.download')->withCategories($categories)->withOveralls($overalls)->withMenus($menus)->withThemes($themes)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }

    public function getMenus($menu_name){
        $menus = Menu::all(); 
        $overalls = Overall::all();
        $sayings = Saying::all();
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(4)->get();;
        $sliders = Slider::orderBy('priority', 'asc')->get();
        $categories = Category::all();
        $services = Service::all();
        $themes = Theme::all();
        $news = News::orderBy('id', 'desc')->take(4)->get();
        $schemes = Scheme::orderBy('id', 'desc')->take(4)->get();
        $notices = Notice::orderBy('id', 'desc')->take(4)->get();
        $category = Category::where('title', $menu_name)->take(1)->get();
        return view('layouts.menu')->withCategories($categories)->withCategory($category)->withOveralls($overalls)->withMenus($menus)->withThemes($themes)->withservices($services)->withSliders($sliders)->withSayings($sayings)->withNews($news)->withNotices($notices)->withSchemes($schemes)->withQuicklinks($quicklinks)->withDownloads($downloads);
    }
}
