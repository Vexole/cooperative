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
        $services = Service::all(); 
        $loans = Scheme::where('service_id',1)->get(); 
    	$savings = Scheme::where('service_id',2)->get();
        $overalls = Overall::all();
        $sayings = Saying::all();
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(4)->get();;
        $sliders = Slider::orderBy('priority', 'asc')->get();
        $services = Service::all();
        $themes = Theme::all();
        $categories = Category::all();
    	return view('layouts.index')->withLoans($loans)->withSavings($savings)->withCategories($categories)->withOveralls($overalls)
        ->withMenus($menus)->withThemes($themes)->withservices($services)->withSliders($sliders)->withSayings($sayings)->withQuicklinks($quicklinks)->withDownloads($downloads);
    }

     public function getContact(){
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $contacts = Contact::take(1)->get();
    	$menus = Menu::all(); 
        $services = Service::all();
        $overalls = Overall::all();
        $quicklinks = Quicklink::all();
        $categories = Category::all();
        $loans = Scheme::where('service_id',1)->get(); 
        $savings = Scheme::where('service_id',2)->get();
        $themes = Theme::all();

    	return view('layouts.contact')->withservices($services)->withLoans($loans)->withSavings($savings)->withCategories($categories)->withOveralls($overalls)->withMenus($menus)->withContacts($contacts)->withThemes($themes)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }

    public function getAbout(){
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $overalls = Overall::all();
        $services = Service::all();
        $categories = Category::all();
        $members = Boardmember::orderBy('priority', 'asc')->get();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();;
        $teams = Teammember::orderBy('priority', 'asc')->get();
    	$menus = Menu::all();
        $themes = Theme::all();
        $abouts = About::all();
        $loans = Scheme::where('service_id',1)->get(); 
        $savings = Scheme::where('service_id',2)->get();

        return view('layouts.about')->withservices($services)->withLoans($loans)->withSavings($savings)->withCategories($categories)->withMenus($menus)->withOveralls($overalls)->withAbouts($abouts)->withThemes($themes)->withMembers($members)->withTeams($teams)->withDownloads($downloads)->withQuicklinks($quicklinks);
    }

     public function getDownload(){
        $services = Service::all();
        $categories = Category::all();
        $downloads = Download::all();
        $overalls = Overall::all();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();;
        $menus = Menu::all();
        $themes = Theme::all();
        $loans = Scheme::where('service_id',1)->get(); 
        $savings = Scheme::where('service_id',2)->get();

        return view('layouts.download')->withservices($services)->withLoans($loans)->withSavings($savings)->withCategories($categories)->withOveralls($overalls)->withMenus($menus)->withThemes($themes)->withDownloads($downloads)->withQuicklinks($quicklinks);
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
        $loans = Scheme::where('service_id',1)->get(); 
        $savings = Scheme::where('service_id',2)->get();
        $news = News::orderBy('id', 'desc')->take(4)->get();
        $schemes = Scheme::orderBy('id', 'desc')->take(4)->get();
        $notices = Notice::orderBy('id', 'desc')->take(4)->get();
        $category = Category::where('title', $menu_name)->take(1)->get();
        return view('layouts.menu')->withLoans($loans)->withSavings($savings)->withCategories($categories)->withCategory($category)->withOveralls($overalls)->withMenus($menus)->withThemes($themes)->withservices($services)->withSliders($sliders)->withSayings($sayings)->withNews($news)->withNotices($notices)->withSchemes($schemes)->withQuicklinks($quicklinks)->withDownloads($downloads);
    }
}
