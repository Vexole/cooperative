<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Menu;

class MenuController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index')->withMenus($menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
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
            'menu_name' => "required|min:3|unique:menus,menu_name"
            ]);

        $menu = new Menu;
        $menu->menu_name = $request->menu_name;
        $menu->save();

        Session::flash('success', 'Menu successfully added!');
        return redirect()->route('menus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('menus.edit')->withMenu($menu);
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
        $menu = Menu::find($id);
       if(($request->input('menu_name') == $menu->menu_name)){
            
       }else{
             $this->validate($request, [
                'menu_name' => "required|min:4|unique:menus,menu_name",
                ]);
        }
            $menu = Menu::find($id);
            
            $menu->menu_name = $request->menu_name;
   

            $menu->save();

            Session::flash('success', 'Menu successfully updated!');
            return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        Session::flash('success', 'Menu was successfully deleted!');
        return redirect()->route('menus.index');
    }
}
