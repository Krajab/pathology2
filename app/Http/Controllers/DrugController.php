<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Drug;

use Illuminate\Support\Facades\Redirect;

use Session;


class DrugController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List all cadres
        $drugs = Drug::orderBy('name', 'asc')->get();

        //Load the view and pass the cadre list
        return view('settings.drug.index')->with('drugs',$drugs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.drug.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data 
        $validation=$this->validate($request, [
            'name' => 'required|unique:drugs',
            // 'description' => 'required|max:50',
                       
        ]);

        $drug = new drug;

        $drug->name = $request->name;
        // $drug->description = $request->description;
            
        $drug->save();

        // redirect
        Session::flash('message', 'Successfully added the a drug!');
        Session::flash('alert-type', 'success');
            
        return Redirect::to('drug');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drug = Drug::find($id);
        return view('settings.drug.edit')->with('drug', $drug);
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

      //validate data
      $validation=$this->validate($request, [
         'name' => 'required|unique:drugs',
            // 'description' => 'required|max:50',
         
      ]);


      $drug = Drug::find($id);

      $drug->name = $request->name;
      $drug->description = $request->description;
      
      $drug->save();

        // redirect
        Session::flash('message', 'Drug information successfully updated!');
        Session::flash('alert-type', 'success');

        return Redirect::to('drug');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       
        // delete
        $drug = drug::find($id);
        $drug->delete();

        // redirect
        Session::flash('message', 'Drug successfully removed!');
        Session::flash('alert-type', 'success');

        return Redirect::to('drug');
    }
}
