<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Storage;

use App\Boardmember;

class BoardmemberController extends Controller
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
        $boardmembers = Boardmember::all();
        return view('/boardmembers.index')->withBoardmembers($boardmembers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/boardmembers.create');
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
            'boardmember_name' => 'required'
            ]);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.imageDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            if($uploaded){
                $boardmember = new Boardmember;
                $boardmember->picture_name = $fileName;
                $boardmember->rank = $request->rank;
                $boardmember->priority = $request->priority;
                $boardmember->boardmember_name = $request->boardmember_name;
                $boardmember->save();

                Session::flash('success', "Successfully Uploaded");
            }
            return redirect()->route('boardmembers.index');
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
        $boardmember = Boardmember::find($id);
        Storage::delete(config('app.imageDestinationPath').'/'.$boardmember->picture_name);
        $boardmember->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect()->route('boardmembers.index');
    }
}
