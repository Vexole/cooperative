<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Storage;

use App\About;

class AboutController extends Controller
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
        $abouts = About::all();
        return view('/abouts.index')->withAbouts($abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/abouts.create');
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
            'file' => 'required',
            'description' => 'required'
            ]);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.imageDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            if($uploaded){
                $about = new About;
                $about->picture_name = $fileName;
                $about->description = $request->description;
                $about->save();

                Session::flash('success', "Successfully Uploaded");
            }
            return redirect()->route('abouts.index');
        }
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
        $about = About::find($id);
        Storage::delete(config('app.imageDestinationPath').'/'.$about->picture_name);
        $about->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect()->route('abouts.index');
    }
}
