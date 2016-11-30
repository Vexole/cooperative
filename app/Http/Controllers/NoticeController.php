<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

use App\Notice;

use App\News;

use Illuminate\Support\Facades\Auth;

use Session;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        $news = News::orderBy('id', 'desc')->take(5)->get();

        if(Auth::guest()){
            $notices = Notice::orderBy('id', 'desc')->paginate(5);
            return view('/notices.notice')->withNotices($notices)->withMenus($menus)->withNews($news);
        }else{
            $notices = Notice::all();
            return view('/notices.index')->withNotices($notices);
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
            return view('notices.create');
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
            'notice_title' => "required|min:3",
            'notice_body' => "required"
            ]);

        $notice = new Notice;
        $notice->notice_title = $request->notice_title;
        $notice->notice_body = $request->notice_body;
        $notice->save();

        Session::flash('success', 'Notice successfully added!');
        return redirect()->route('notices.index');
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
        $news = News::orderBy('id', 'desc')->take(5)->get();
        $notice = Notice::find($id);
        return view('notices.show')->withNotice($notice)->withMenus($menus)->withNews($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('notices.edit')->withNotice($notice);
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
        $notice = Notice::find($id);
        
       if(($request->notice_title == $notice->notice_title) && ($request->notice_body == $notice->notice_body) ){

        }else if($request->input('notice_title') == $notice->notice_title){
            $this->validate($request, [
                'notice_body' => "required"
                ]);
        }else if($request->input('notice_body') == $notice->notice_body){
            $this->validate($request, [
                'notice_title' => "required"
                ]);
        }else{
             $this->validate($request, [
                'notice_title' => "required",
                'notice_body' => "required",
                ]);
        }

            
        $notice->notice_title = $request->notice_title;
        $notice->notice_body = $request->notice_body;
        $notice->save();

        Session::flash('success', 'Notice successfully updated!');
        return redirect()->route('notices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        Session::flash('success', 'Notice was successfully deleted!');
        return redirect()->route('notices.index');
    }
}
