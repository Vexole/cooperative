<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Saying;

use Session;
use Storage;

class SayingController extends Controller
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
        $sayings = Saying::all();
        return view('/sayings.index')->withSayings($sayings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/sayings.create');
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
            'name' => 'required',
            'quotation' => 'required'
            ]);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.imageDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            if($uploaded){
                $saying = new Saying;
                $saying->image_name = $fileName;
                $saying->rank = $request->rank;
                $saying->quotation = $request->quotation;
                $saying->name = $request->name;
                $saying->save();

                Session::flash('success', "Successfully Uploaded");
            }
            return redirect()->route('sayings.index');
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
        $saying = Saying::find($id);
        return view('/sayings.edit')->withSaying($saying);
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
        $saying = Saying::find($id);

       if(($request->quotation == $saying->quotation) && ($request->rank == $saying->rank) && ($request->name == $saying->name) ){

        }else if(($request->input('quotation') == $saying->quotation) && ($request->rank == $saying->rank)){
            $this->validate($request, [
                'name' => "required"
                ]);
        }else if(($request->input('quotation') == $saying->quotation) && ($request->name == $saying->name)) {
            $this->validate($request, [
                'rank' => "required"
                ]);
        }else if(($request->input('rank') == $saying->rank) && ($request->name == $saying->name)) {
            $this->validate($request, [
                'quotation' => "required"
                ]);
        }else if(($request->input('rank') == $saying->rank)) {
            $this->validate($request, [
                'quotation' => "required",
                'name' => "required"
                ]);
        }else if(($request->name == $saying->name)) {
            $this->validate($request, [
                'quotation' => "required",
                'rank' => "required"
                ]);
        }else if(($request->input('quotation') == $saying->quotation)) {
            $this->validate($request, [
                'name' => "required",
                'rank' => "required"
                ]);
        }else{
             $this->validate($request, [
                'quotation' => "required",
                'rank' => "required",
                'name' => "required"
                ]);
        }

            
        $saying->quotation = $request->quotation;
        $saying->name = $request->name;
        $saying->rank = $request->rank;
        $saying->save();

        Session::flash('success', 'Saying successfully updated!');
        return redirect()->route('sayings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saying = Saying::find($id);
        $saying->delete();
        Session::flash('success', 'Saying was successfully deleted!');
        return redirect()->route('sayings.index');
    }
}
