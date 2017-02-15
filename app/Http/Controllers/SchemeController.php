<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scheme;
use App\Quicklink;
use App\Menu;
use App\Notice;
use App\Theme;
use App\News;
use App\Download;
use App\Service;
use App\Overall;
use App\Category;


use Illuminate\Support\Facades\Auth;

use Session;

class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();;
        $menus = Menu::all();
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $overalls = Overall::all();
        $services = Service::all();
        $themes = Theme::all();
        $notices = Notice::orderBy('id', 'desc')->take(4)->get();
        $news = News::orderBy('id', 'desc')->take(4)->get();
        $categories = Category::all();

        if(Auth::guest()){
            return view('/schemes.scheme')->withCategories($categories)->withOveralls($overalls)->withNews($news)->withQuicklinks($quicklinks)->withMenus($menus)->withNotices($notices)->withThemes($themes)->withServices($services)->withDownloads($downloads);
        }else{
            $schemes = Scheme::all();
            return view('/schemes.index')->withSchemes($schemes);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()){
            return view('/schemes.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'scheme_name' => "required|min:3",
            'scheme_body' => "required|min:3",
            'interest' => "required"
            ]);

        $scheme = new Scheme;
        $scheme->interest = $request->interest;
        $scheme->scheme_name = $request->scheme_name;
        $scheme->scheme_body = $request->scheme_body;
    
        $scheme->save();

        Session::flash('success', 'Scheme successfully added!');
        return redirect()->route('schemes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $quicklinks = Quicklink::orderBy('priority', 'asc')->take(5)->get();
        $downloads = Download::orderBy('id','asc')->take(5)->get();
        $overalls = Overall::all();
        $themes = Theme::all();
        $menus = Menu::all();
        $scheme = Scheme::find($id);
        $news = News::orderBy('id', 'desc')->take(4)->get();
        $notices = Notice::orderBy('id', 'desc')->take(4)->get();
        return view('schemes.show')->withCategories($categories)->withOveralls($overalls)->withNotices($notices)->withMenus($menus)->withQuicklinks($quicklinks)->withNews($news)->withThemes($themes)->withScheme($scheme)->withDownloads($downloads);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scheme = Scheme::find($id);
        return view('schemes.edit')->withScheme($scheme);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $scheme = Scheme::find($id);
       
       if(($request->scheme_name == $scheme->scheme_name) && ($request->scheme_body == $scheme->scheme_body) && ($request->interest == $scheme->interest) ){

        }else if(($request->input('scheme_name') == $scheme->scheme_name) && ($request->input('scheme_body') == $scheme->scheme_body)){
            $this->validate($request, [
                    'interest' => "required",
                ]);
        }else if(($request->input('scheme_name') == $scheme->scheme_name) && ($request->input('interest') == $scheme->interest)){
            $this->validate($request, [
                'scheme_body' => "required"
                ]);
        }else if(($request->input('scheme_body') == $scheme->scheme_body) && ($request->input('interest') == $scheme->interest)){
            $this->validate($request, [
                'scheme_name' => "required"
                ]);
        }else if(($request->input('scheme_body') == $scheme->scheme_body)){
            $this->validate($request, [
                'scheme_name' => "required",
                'interest' => "required"
                ]);
        }else if(($request->input('interest') == $scheme->interest)){
            $this->validate($request, [
                'scheme_name' => "required",
                'scheme_body' => "required"
                ]);
        }else if(($request->input('scheme_name') == $scheme->scheme_body)){
            $this->validate($request, [
                'scheme_body' => "required",
                'interest' => "required"
                ]);
        }else{
             $this->validate($request, [
                'scheme_body' => "required",
                'scheme_name' => "required",
                'interest' => "required",
                ]);
        }

        $scheme->interest = $request->interest;
        $scheme->scheme_name = $request->scheme_name;
        $scheme->scheme_body = $request->scheme_body;
    
        $scheme->save();

        Session::flash('success', 'Scheme successfully updated!');
        return redirect()->route('schemes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scheme = Scheme::find($id);
        $scheme->delete();
        Session::flash('success', 'Scheme was successfully deleted!');
        return redirect()->route('schemes.index');
    }
}
