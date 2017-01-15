<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quicklink;

use Session;

class QuicklinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $quicklinks = Quicklink::all();
        return view('/quicklinks.index')->withQuicklinks($quicklinks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/quicklinks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'link' => 'required',
                'description' => 'required',
                'priority' => 'required'
            ]);

        $quicklink = new Quicklink;
        $quicklink->description = $request->description;
        $quicklink->link = $request->link;
        $quicklink->priority = $request->priority;
        $quicklink->save();

        Session::flash('success', "Quicklink successfully added");
        return redirect()->route('quicklinks.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quicklink = Quicklink::find($id);
        $quicklink->delete();
        Session::flash('success', 'Quicklink was successfully deleted');
        return redirect()->route('quicklinks.index');
    }
}
