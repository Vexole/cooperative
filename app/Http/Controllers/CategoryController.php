<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Menu;
use App\Notice;
use App\Scheme;
use App\Quicklink;
use App\Theme;
use App\Overall;
use App\Category;
use App\Download;

use Illuminate\Support\Facades\Auth;

use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('/categories.index')->withCategories($categories);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->withCategory($category);
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
        $category = Category::find($id);

       if(($request->body_up == $category->body_up) && ($request->body_down == $category->body_down) ){

        }else if($request->input('body_up') == $category->body_up){
            $this->validate($request, [
                'body_down' => "required"
                ]);
        }else if($request->input('body_down') == $category->body_down){
            $this->validate($request, [
                'body_up' => "required"
                ]);
        }else{
             $this->validate($request, [
                'body_up' => "required",
                'body_down' => "required",
                ]);
        }

            
        $category->body_up = $request->body_up;
        $category->body_down = $request->body_down;
        $category->save();

        Session::flash('success', 'Successfully updated!');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
