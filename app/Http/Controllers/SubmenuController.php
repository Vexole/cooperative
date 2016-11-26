<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Submenu;

use App\Menu;

class SubmenuController extends Controller
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
        $submenus = Submenu::all();
        return view('submenus.index')->withSubmenus($submenus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $i = 0;
        foreach ($menus as $menu) {
            $list[$i] = $menu->menu_name;
            $i++;
        }
        return view('submenus.create')->withList($list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menus = Menu::all();
        $i = 0;
        foreach ($menus as $menu) {
            $list[$i] = $menu->menu_name;
            $i++;
        }

        $this->validate($request,[
            'submenu_name' => 'required',
            'menu_name' => 'required'
            ]);

        $queryMenus = Menu::where('menu_name', $list[$request->menu_name])->get();
       
        foreach($queryMenus as $queryMenu){
           $menu_id = $queryMenu->id;
        }

        $submenu = new Submenu;
        $submenu->submenu_name = $request->submenu_name;
        $submenu->menu_id = $menu_id;
        $submenu->save();

        Session::flash('success', 'Sub Menu successfully added!');
        return redirect()->route('submenus.index');
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
        $menus = Menu::all();
        $i = 0;
        foreach ($menus as $menu) {
            $list[$i] = $menu->menu_name;
            $i++;
        }

        $submenu = Submenu::find($id);
        return view('submenus.edit')->withSubmenu($submenu)->withList($list);
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
        $menus = Menu::all();
        $i = 0;
        foreach ($menus as $menu) {
            $list[$i] = $menu->menu_name;
            $i++;
        }

        $submenu = Submenu::find($id);
        
        if(($list[$request->menu_name] == $submenu->menu->menu_name) && ($request->submenu_name == $submenu->submenu_name) ){

        }else if($request->input('submenu_name') == $submenu->menu_name){
            $this->validate($request, [
                'menu_name' => "required"
                ]);
        }else if($list[$request->menu_name] == $submenu->menu->menu_name){
            $this->validate($request, [
                'submenu_name' => "required"
                ]);
        }else{
             $this->validate($request, [
                'menu_name' => "required",
                'submenu_name' => "required|min:4",
                ]);
        }

        $queryMenus = Menu::where('menu_name', $list[$request->menu_name])->get();
       
        foreach($queryMenus as $queryMenu){
           $menu_id = $queryMenu->id;
        }

            $submenu = Submenu::find($id);
            
            $submenu->menu_id = $menu_id;
            $submenu->submenu_name = $request->submenu_name;

            $submenu->save();

            Session::flash('success', 'Sub menu successfully updated!');
            return redirect()->route('submenus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $submenu = Submenu::find($id);
        $submenu->delete();
        Session::flash('success', "Sub menu successfully deleted");
        return redirect()->route('submenus.index');
    }
}
