<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Session;

use App\Overall;

use Storage;

class OverallController extends Controller
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
        $overalls = Overall::take(1)->get();
        return view('/overalls.index')->withOveralls($overalls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/overalls.create');
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
            'credit' => 'required',
            'company' => 'required',
            'year' => 'required',
            'credit' => 'required',
            'facebook_link' => 'required'
            ]);

         if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.imageDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            if($uploaded){
                $overall = new Overall;
                $overall->logo_name = $fileName;
                $overall->credit = $request->credit;
                $overall->company = $request->company;
                $overall->year = $request->year;
                $overall->facebook_link = $request->facebook_link;
                $overall->save();

                Session::flash('success', "Successfully Saved");
            }
            return redirect()->route('overalls.index');
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
        $overall = Overall::find($id);
        return view('overalls.edit')->withOverall($overall);
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
        $this->validate($request, [
            'credit' => 'required',
            'company' => 'required',
            'year' => 'required',
            'facebook_link' => 'required'
            ]);

        $overall = Overall::find($id);
        $overall->credit = $request->credit;
        $overall->year = $request->year;
        $overall->facebook_link = $request->facebook_link;
        $overall->company = $request->company;
        $overall->save();

        Session::flash('success', "Detail successfully updated");
        return redirect()->route('overalls.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $overall = Overall::find($id);
        Storage::delete(config('app.imageDestinationPath').'/'.$overall->logo_name);
        $overall->delete();
        Session::flash('success', "Details successfully deleted");
        return redirect()->route('overalls.index');
    }
}
