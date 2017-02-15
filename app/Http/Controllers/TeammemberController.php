<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Storage;

use App\Teammember;

class TeammemberController extends Controller
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
        $teammembers = Teammember::all();
        return view('/teammembers.index')->withteammembers($teammembers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/teammembers.create');
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
            'rank' => 'required',
            'priority' => 'required',
            'teammember_name' => 'required'
            ]);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.imageDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            if($uploaded){
                $teammember = new teammember;
                $teammember->picture_name = $fileName;
                $teammember->rank = $request->rank;
                $teammember->priority = $request->priority;
                $teammember->teammember_name = $request->teammember_name;
                $teammember->save();

                Session::flash('success', "Successfully Uploaded");
            }
            return redirect()->route('teammembers.index');
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
        $teammember = Teammember::find($id);
        Storage::delete(config('app.imageDestinationPath').'/'.$teammember->picture_name);
        $teammember->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect()->route('teammembers.index');
    }
}
