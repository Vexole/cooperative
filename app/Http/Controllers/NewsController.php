<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use App\Menu;

use App\Notice;

use Illuminate\Support\Facades\Auth;

use Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $menus = Menu::all();
        $notices = Notice::orderBy('id', 'desc')->take(5)->get();
        if(Auth::guest()){
            $news = News::orderBy('id', 'desc')->paginate(5);
            return view('/news.news')->withNews($news)->withMenus($menus)->withNotices($notices);
        }else{
            $news = News::all();
            return view('/news.index')->withNews($news);
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
            return view('news.create');
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
            'news_title' => "required|min:3",
            'news_body' => "required"
            ]);

        $news = new News;
        $news->news_title = $request->news_title;
        $news->news_body = $request->news_body;
        $news->save();

        Session::flash('success', 'News successfully added!');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menus = Menu::all();
        $new = News::find($id);
        $notices = Notice::orderBy('id', 'desc')->take(5)->get();
        return view('news.show')->withNew($new)->withMenus($menus)->withNotices($notices);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit')->withNews($news);
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
        $news = News::find($id);

       if(($request->news_title == $news->news_title) && ($request->news_body == $news->news_body) ){

        }else if($request->input('news_title') == $news->news_title){
            $this->validate($request, [
                'news_body' => "required"
                ]);
        }else if($request->input('news_body') == $news->news_body){
            $this->validate($request, [
                'news_title' => "required"
                ]);
        }else{
             $this->validate($request, [
                'news_title' => "required",
                'news_body' => "required",
                ]);
        }

            
        $news->news_title = $request->news_title;
        $news->news_body = $request->news_body;
        $news->save();

        Session::flash('success', 'News successfully updated!');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        Session::flash('success', 'News was successfully deleted!');
        return redirect()->route('news.index');
    }
}
